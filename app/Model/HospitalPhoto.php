<?php

App::uses('AppModel', 'Model');

/**
 * HospitalPhotoDup Model
 *
 * @property HospitalData $HospitalData
 * @property Photo $Photo
 */
class HospitalPhoto extends AppModel {

    public $useTable = 'hospital_photo';

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
    );

    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'HospitalData' => array(
            'className' => 'HospitalData',
            'foreignKey' => 'hospital_data_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Photos' => array(
            'className' => 'Photos',
            'foreignKey' => 'photo_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

}
