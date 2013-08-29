<?php
App::uses('AppModel', 'Model');
/**
 * RecruitingBenefit Model
 *
 * @property HospitalData $HospitalData
 * @property RecruitingData $RecruitingData
 */
class RecruitingBenefit extends AppModel {


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
