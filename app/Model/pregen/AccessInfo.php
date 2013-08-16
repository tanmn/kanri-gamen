<?php
App::uses('AppModel', 'Model');
/**
 * AccessInfo Model
 *
 * @property User $User
 * @property Entry $Entry
 * @property Transition $Transition
 * @property Session $Session
 */
class AccessInfo extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'access_info';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Entry' => array(
			'className' => 'Entry',
			'foreignKey' => 'entry_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Transition' => array(
			'className' => 'Transition',
			'foreignKey' => 'transition_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Session' => array(
			'className' => 'Session',
			'foreignKey' => 'session_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
