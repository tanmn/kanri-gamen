<?php
App::uses('AppModel', 'Model');
/**
 * ConsiderLog Model
 *
 * @property Add $Add
 * @property Session $Session
 */
class ConsiderLog extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'consider_log';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Add' => array(
			'className' => 'Add',
			'foreignKey' => 'add_id',
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
