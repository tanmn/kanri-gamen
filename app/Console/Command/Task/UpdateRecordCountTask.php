<?php

App::uses('AppShell', 'Console/Command');
App::uses('File', 'Utility');

/**
 * Task for updating record count to ms_* tables
 *
 * @author      Mai Nhut Tan
 * @since       2013/08/19
 * @package     app.Console.Command.Task
 */
class UpdateRecordCountTask extends AppShell {

    public $uses = array('HospitalDatum','RecruitingDatum','MsPrefecture','MsWard','MsStation');

    /**
     * Execution method always used for tasks
     *
     * @return void
     */
    public function execute() {
        $this->out('================================================');
        $this->out('   FETCH QUEUED PHOTOS AND SAVE TO THE SERVER   ');
        $this->out('================================================');
        $this->out();

        //process confirmation
        $response = $this->in(__d('cake_console', 'All rows will be updated with new count data. Continue?'), array('y', 'n'), 'y');
        if(strtolower($response) == 'n'){
            $this->out();
            return;
        }

        $h_count = $this->_getHospitalCount('pref_cd');
        $r_count = $this->_getRecruitingCount('pref_cd');
        $norh_count = $this->_getHospitalWithoutRecruitingCount('pref_cd');

        $this->out(pr($h_count));
        $this->out(pr($r_count));
        $this->out(pr($norh_count));

        $this->out();
        $this->hr();
        $this->out('Data has been updated.');
        $this->out(sprintf(__d('cake_console', 'ms_ward: %d row(s) affected.'), $ward_updated_count));
        //$this->out(sprintf(__d('cake_console', 'ms_station: %d row(s) affected.'), $station_updated_count));
        $this->out(sprintf(__d('cake_console', 'ms_prefecture: %d row(s) affected.'), $pref_updated_count));
    }

    /**
     *
     * @return array
     */
    private function _getHospitalCount($column){
        return $this->HospitalDatum->find(
            'all',
            array(
                'fields' => array(
                    'HospitalDatum.'.$column,
                    'COUNT(HospitalDatum.id)'
                ),
                'conditions' => array(
                    'HospitalDatum.posting_flag' => 1,
                    'HospitalDatum.status' => 1,
                    'HospitalDatum.'.$column.' IS NOT NULL'
                ),
                'group' => array('HospitalDatum.'.$column)
            )
        );
    }

    private function _getRecruitingCount($column){
        return $this->RecruitingDatum->find(
            'all',
            array(
                'joins' => array(
                    array(
                        'table' => 'hospital_data',
                        'alias' => 'HospitalDatum',
                        'type'  => 'LEFT',
                        'conditions' => array(
                            'RecruitingDatum.hospital_data_id = HospitalDatum.id'
                        )
                    )
                ),
                'fields' => array(
                    'HospitalDatum.'.$column,
                    'COUNT(HospitalDatum.id) AS count'
                ),
                'conditions' => array(
                    'HospitalDatum.posting_flag' => 1,
                    'HospitalDatum.status' => 1,
                    'HospitalDatum.'.$column.' IS NOT NULL',
                    'RecruitingDatum.posting_flag' => 1,
                    'RecruitingDatum.accept_flag' => 1
                ),
                'group' => array('HospitalDatum.'.$column)
            )
        );
    }

    private function _getHospitalWithoutRecruitingCount($column){
        return $this->HospitalDatum->find(
            'all',
            array(
                'joins' => array(
                    array(
                        'table' => 'recruiting_data',
                        'alias' => 'RecruitingDatum',
                        'type'  => 'LEFT',
                        'conditions' => array(
                            'RecruitingDatum.hospital_data_id = HospitalDatum.id',
                            'RecruitingDatum.posting_flag' => 1,
                            'RecruitingDatum.accept_flag' => 1,
                        )
                    )
                ),
                'fields' => array(
                    'HospitalDatum.'.$column,
                    'COUNT(HospitalDatum.id) AS count'
                ),
                'conditions' => array(
                    'HospitalDatum.posting_flag' => 1,
                    'HospitalDatum.status' => 1,
                    'HospitalDatum.'.$column.' IS NOT NULL',
                    'RecruitingDatum.id IS NULL'
                ),
                'group' => array('HospitalDatum.'.$column)
            )
        );
    }
}
