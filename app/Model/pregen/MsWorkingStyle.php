<?php
App::uses('AppModel', 'Model');
/**
 * MsWorkingStyle Model
 *
 * @property Time $Time
 */
class MsWorkingStyle extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'ms_working_style';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Time' => array(
			'className' => 'Time',
			'joinTable' => 'ms_working_style_time',
			'foreignKey' => 'ms_working_style_id',
			'associationForeignKey' => 'time_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
