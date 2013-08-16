<?php
App::uses('AppModel', 'Model');
/**
 * HospitalDataMsTreatmentSubject Model
 *
 * @property HospitalData $HospitalData
 * @property TreatmentSubject $TreatmentSubject
 */
class HospitalDataMsTreatmentSubject extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'hospital_data_ms_treatment_subject';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'hospital_data_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'treatment_subject_id' => array(
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
		'HospitalData' => array(
			'className' => 'HospitalData',
			'foreignKey' => 'hospital_data_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TreatmentSubject' => array(
			'className' => 'TreatmentSubject',
			'foreignKey' => 'treatment_subject_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
