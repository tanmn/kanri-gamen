<?php
App::uses('AppModel', 'Model');
/**
 * GeneralUser Model
 *
 * @property Resume $Resume
 * @property Access $Access
 */
class GeneralUser extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'general_user';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'passwd' => array(
			'notempty' => array(
				'rule' => array('notempty'),
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
		'Resume' => array(
			'className' => 'Resume',
			'foreignKey' => 'resume_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Access' => array(
			'className' => 'Access',
			'foreignKey' => 'access_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
