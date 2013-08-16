<?php
App::uses('AppModel', 'Model');
/**
 * Entry Model
 *
 * @property User $User
 * @property RecruitingData $RecruitingData
 * @property HospitalData $HospitalData
 * @property AfAsp $AfAsp
 * @property Access $Access
 * @property AccessInfo $AccessInfo
 * @property Introduction $Introduction
 * @property GaDatum $GaDatum
 */
class Entry extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'entry';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'user_id' => array(
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
		'RecruitingData' => array(
			'className' => 'RecruitingData',
			'foreignKey' => 'recruiting_data_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'HospitalData' => array(
			'className' => 'HospitalData',
			'foreignKey' => 'hospital_data_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AfAsp' => array(
			'className' => 'AfAsp',
			'foreignKey' => 'af_asp_id',
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

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'AccessInfo' => array(
			'className' => 'AccessInfo',
			'foreignKey' => 'entry_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Introduction' => array(
			'className' => 'Introduction',
			'foreignKey' => 'entry_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'GaDatum' => array(
			'className' => 'GaDatum',
			'joinTable' => 'entry_ga_data',
			'foreignKey' => 'entry_id',
			'associationForeignKey' => 'ga_datum_id',
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
