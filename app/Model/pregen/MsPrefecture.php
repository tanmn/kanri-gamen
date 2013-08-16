<?php
App::uses('AppModel', 'Model');
/**
 * MsPrefecture Model
 *
 */
class MsPrefecture extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'ms_prefecture';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'prefecture_cd' => array(
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
