<?php
App::uses('AppModel', 'Model');
/**
 * BlogCategory Model
 *
 */
class BlogCategory extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'blog_category';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'delete_flg' => array(
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
