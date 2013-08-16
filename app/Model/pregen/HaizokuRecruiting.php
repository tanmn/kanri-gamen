<?php
App::uses('AppModel', 'Model');
/**
 * HaizokuRecruiting Model
 *
 * @property Recruiting $Recruiting
 */
class HaizokuRecruiting extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'haizoku_recruiting';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'recruiting_id' => array(
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
		'Recruiting' => array(
			'className' => 'Recruiting',
			'foreignKey' => 'recruiting_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
