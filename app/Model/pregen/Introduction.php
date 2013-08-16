<?php
App::uses('AppModel', 'Model');
/**
 * Introduction Model
 *
 * @property Entry $Entry
 * @property Js $Js
 * @property Business $Business
 * @property Business $Business
 */
class Introduction extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'introduction';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Entry' => array(
			'className' => 'Entry',
			'foreignKey' => 'entry_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Js' => array(
			'className' => 'Js',
			'foreignKey' => 'js_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Business' => array(
			'className' => 'Business',
			'foreignKey' => 'business_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Business' => array(
			'className' => 'Business',
			'joinTable' => 'business_introduction',
			'foreignKey' => 'introduction_id',
			'associationForeignKey' => 'business_id',
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
