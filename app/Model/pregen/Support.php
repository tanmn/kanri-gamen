<?php
App::uses('AppModel', 'Model');
/**
 * Support Model
 *
 */
class Support extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'support';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'user_name' => array(
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
}
