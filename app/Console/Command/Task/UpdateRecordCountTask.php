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

        $pref_count = $this->getData($this->MsPrefecture, 'pref_cd');
        $ward_count = $this->getData($this->MsWard, 'ward_cd');
        //$station_count = $this->getData($this->MsStation, 'station_cd1', 'station_cd');

        //process confirmation
        $response = $this->in(__d('cake_console', 'All rows will be updated with new count data. Continue?'), array('y', 'n'), 'y');
        if(strtolower($response) == 'n'){
            $this->out();
            return;
        }



        $this->MsWard->updateAll($ward_count);
        $ward_updated_count = $this->MsWard->getAffectedRows();

        //$this->MsStation->updateAll($station_count);
        //$station_updated_count = $this->MsStation->getAffectedRows();

        $this->MsPrefecture->updateAll($pref_count);
        $pref_updated_count = $this->MsPrefecture->getAffectedRows();

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
    public function getData($model, $column1, $column2 = null){

        if($column2 == null) $column2 = $column1;

        $h_count = $this->_buildCountSubquery(
            $this->HospitalDatum,
            array(
                'Counted.'.$column1.'='.$model->alias.'.'.$column2
            )
        );

        $r_count = $this->_buildCountSubquery(
            $this->RecruitingDatum,
            array(
                'Counted.'.$column1.'='.$model->alias.'.'.$column2
            )
        );

        $norh_count = $this->_buildCountSubquery(
            $this->HospitalDatum,
            array(
                'Counted.'.$column1.'='.$model->alias.'.'.$column2,
                'Counted.norh_flag' => 1
            )
        );

        return array(
            'h_count' => $h_count,
            'r_count' => $r_count,
            'norh_count' => $norh_count
        );
    }

    function _buildCountSubquery($model, $conditions = array()){
        $db = $model->getDataSource();
        $subQuery = $db->buildStatement(
            array(
                'fields'     => array('count(*)'),
                'table'      => $db->fullTableName($model),
                'alias'      => 'Counted',
                'limit'      => null,
                'offset'     => null,
                'joins'      => array(),
                'conditions' => $conditions,
                'order'      => null,
                'group'      => null
            ),
            $model
        );

        return "({$subQuery})";
    }
}
