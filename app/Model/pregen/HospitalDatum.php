<?php
App::uses('AppModel', 'Model');
/**
 * HospitalDatum Model
 *
 * @property FacilityForm $FacilityForm
 * @property Business $Business
 * @property Proagent $Proagent
 * @property HistoryBusiness $HistoryBusiness
 * @property Media $Media
 * @property Rw $Rw
 * @property MsTreatmentSubject $MsTreatmentSubject
 */
class HospitalDatum extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'hospital_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'norh_flag' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'updated_by_ko_flag' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'rank_of_approaching_hospital' => array(
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
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'MsTreatmentSubject' => array(
			'className' => 'MsTreatmentSubject',
			'joinTable' => 'hospital_data_ms_treatment_subject',
			'foreignKey' => 'hospital_data_id',
			'associationForeignKey' => 'treatment_subject_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
