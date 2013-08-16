<?php
App::uses('AppModel', 'Model');
/**
 * MsWard Model
 *
 */
class MsWard extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'ms_ward';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'ward_cd' => array(
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
}
