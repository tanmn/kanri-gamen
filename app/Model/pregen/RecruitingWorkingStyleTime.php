<?php
App::uses('AppModel', 'Model');
/**
 * RecruitingWorkingStyleTime Model
 *
 * @property HospitalData $HospitalData
 * @property RecruitingData $RecruitingData
 */
class RecruitingWorkingStyleTime extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'recruiting_working_style_time';


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
		'RecruitingData' => array(
			'className' => 'RecruitingData',
			'foreignKey' => 'recruiting_data_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
