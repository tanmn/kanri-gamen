<?php
App::uses('AppModel', 'Model');
/**
 * LpRecruitingDatum Model
 *
 * @property RecruitingData $RecruitingData
 * @property FacilityForm $FacilityForm
 */
class LpRecruitingDatum extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'sort_num' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'RecruitingData' => array(
			'className' => 'RecruitingData',
			'foreignKey' => 'recruiting_data_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'FacilityForm' => array(
			'className' => 'FacilityForm',
			'foreignKey' => 'facility_form_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
