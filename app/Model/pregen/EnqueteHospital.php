<?php
App::uses('AppModel', 'Model');
/**
 * EnqueteHospital Model
 *
 * @property Enquete $Enquete
 * @property Hospital $Hospital
 */
class EnqueteHospital extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'enquete_hospital';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'enquete_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'hospital_id' => array(
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
		'Enquete' => array(
			'className' => 'Enquete',
			'foreignKey' => 'enquete_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Hospital' => array(
			'className' => 'Hospital',
			'foreignKey' => 'hospital_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
