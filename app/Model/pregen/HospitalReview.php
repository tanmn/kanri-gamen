<?php
App::uses('AppModel', 'Model');
/**
 * HospitalReview Model
 *
 * @property Hospital $Hospital
 */
class HospitalReview extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'hospital_review';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
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
		'Hospital' => array(
			'className' => 'Hospital',
			'foreignKey' => 'hospital_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
