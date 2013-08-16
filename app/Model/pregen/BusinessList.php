<?php
App::uses('AppModel', 'Model');
/**
 * BusinessList Model
 *
 * @property Login $Login
 * @property Sort $Sort
 * @property Group $Group
 */
class BusinessList extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'business_list';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Login' => array(
			'className' => 'Login',
			'foreignKey' => 'login_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Sort' => array(
			'className' => 'Sort',
			'foreignKey' => 'sort_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Group' => array(
			'className' => 'Group',
			'foreignKey' => 'group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
