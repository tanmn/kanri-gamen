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
        $this->out('        UPDATE RECORD COUNT INTO DATABASE       ');
        $this->out('================================================');
        $this->out();

        //process confirmation
        $response = $this->in(__d('cake_console', 'All rows will be updated with new count data. Continue?'), array('y', 'n'), 'y');
        if(strtolower($response) == 'n'){
            $this->out();
            return;
        }

        $this->out();
        $this->out(__('Please wait while program is collecting data. It might take a few minutes to be completed.'));

        //get count data
        $dataPrefecture = $this->_getDataObject('pref_cd');
        $dataWard       = $this->_getDataObject('ward_cd');
        $dataStations1  = $this->_getDataObject('station_n_cd1');
        $dataStations2  = $this->_getDataObject('station_n_cd2');
        $dataStations3  = $this->_getDataObject('station_n_cd3');
        $dataStations   = $this->_mergeStationCount($dataStations1, $dataStations2);
        $dataStations   = $this->_mergeStationCount($dataStations, $dataStations3);

        //update data
        $this->_update($this->MsWard, 'ward_cd', $dataWard);
        $this->_update($this->MsPrefecture, 'prefecture_cd', $dataPrefecture);
        $this->_update($this->MsStation, 'station_g_cd', $dataStations);

        //terminating
        $this->out();
        $this->hr();
        $this->out('Data has been updated.');
    }


    /**
     * Update all count data to DB
     *
     * @author Mai Nhut Tan
     * @since 2013/08/28
     * @param Model $model
     * @param string $where_column will be filtered in conditions
     * @param array $data
     * @return void
     */
    private function _update($model, $where_column, $data){
        $this->out();
        $this->out(__('Updating into table %s...', $model->table));

        //reset all rows
        $model->updateAll(array(
            'h_count' => 0,
            'r_count' => 0,
            'norh_count' => 0
        ));

        //set new values
        foreach($data as $code => $fields){
            $conditons = array($model->alias . '.' . $where_column => $code);
            $model->updateAll($fields, $conditons);
            //$this->out(__('Update table %s (h|r|norh) on %s = %s values (%d|%d|%d)', $model->table, $where_column, $code, @$fields['h_count'], @$fields['r_count'], @$fields['norh_count']));
        }

        $this->out(__('Updated %d row(s) in table %s.', count($data), $model->table));
    }


    /**
     * Collect and combine h_count, r_count, norh_count data, group by provided column
     *
     * @author Mai Nhut Tan
     * @since 2013/08/28
     * @param string $column
     * @return array
     */
    private function _getDataObject($column){
        $h_count = $this->_getHospitalCount($column);
        $r_count = $this->_getRecruitingCount($column);
        $norh_count = $this->_getHospitalWithoutRecruitingCount($column);

        $table = array();

        foreach($h_count as $k => $item){
            if(!isset($table[$k])){
                $table[$k] = $item;
            }else{
                $table[$k]['h_count'] = $item['h_count'];
            }
        }

        foreach($r_count as $k => $item){
            if(!isset($table[$k])){
                $table[$k] = $item;
            }else{
                $table[$k]['r_count'] = $item['r_count'];
            }
        }

        foreach($norh_count as $k => $item){
            if(!isset($table[$k])){
                $table[$k] = $item;
            }else{
                $table[$k]['norh_count'] = $item['norh_count'];
            }
        }

        return $table;
    }


    private function _mergeStationCount($data1, $data2){
        foreach($data2 as $code => $values){
            if(!isset($data1[$code])){
                $data1[$code] = $values;
                continue;
            }

            foreach($values as $col => $v){
                if(isset($data1[$code][$col])){
                    $data1[$code][$col] += $v;
                    continue;
                }

                $data1[$code][$col] = $v;
            }
        }

        return $data1;
    }

    /**
     * Collect h_count data, group by provided column
     *
     * @author Mai Nhut Tan
     * @since 2013/08/28
     * @param string $column
     * @return array
     */
    private function _getHospitalCount($column){
        $result = $this->HospitalDatum->find(
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

        $output = array();

        foreach($result as $item){
            $code = $item['HospitalDatum'][$column];
            $count = $item[0]['count'];

            $output[$code] = array('h_count' => $count);
        }

        return $output;
    }


    /**
     * Collect r_count data, group by provided column
     *
     * @author Mai Nhut Tan
     * @since 2013/08/28
     * @param string $column
     * @return array
     */
    private function _getRecruitingCount($column){
        $result = $this->RecruitingDatum->find(
            'all',
            array(
                'joins' => array(
                    array(
                        'table' => 'hospital_data',
                        'alias' => 'HospitalDatum',
                        'type'  => 'INNER',
                        'conditions' => array(
                            'RecruitingDatum.hospital_data_id = HospitalDatum.id'
                        )
                    )
                ),
                'fields' => array(
                    'HospitalDatum.'.$column,
                    'COUNT(RecruitingDatum.id) AS count'
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

        $output = array();

        foreach($result as $item){
            $code = $item['HospitalDatum'][$column];
            $count = $item[0]['count'];

            $output[$code] = array('r_count' => $count);
        }

        return $output;
    }


    /**
     * Collect norh_count data, group by provided column
     *
     * @author Mai Nhut Tan
     * @since 2013/08/28
     * @param string $column
     * @return array
     */
    private function _getHospitalWithoutRecruitingCount($column){
        $result = $this->HospitalDatum->find(
            'all',
            array(
                'joins' => array(
                    array(
                        'table' => 'recruiting_data',
                        'alias' => 'RecruitingDatum',
                        'type'  => 'INNER',
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

        $output = array();

        foreach($result as $item){
            $code = $item['HospitalDatum'][$column];
            $count = $item[0]['count'];

            $output[$code] = array('norh_count' => $count);
        }

        return $output;
    }
}
