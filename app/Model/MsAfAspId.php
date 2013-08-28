<?php
App::uses('AppModel', 'Model');
/**
 * MsAfAspId Model
 *
 * @property Media $Media
 * @property AfAsp $AfAsp
 */
class MsAfAspId extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'ms_af_asp_id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'media_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'This field is a number',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'af_asp_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'This field is a number',
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
		// 'Media' => array(
			// 'className' => 'Media',
			// 'foreignKey' => 'media_id',
			// 'conditions' => '',
			// 'fields' => '',
			// 'order' => ''
		// ),
		// 'AfAsp' => array(
			// 'className' => 'AfAsp',
			// 'foreignKey' => 'af_asp_id',
			// 'conditions' => '',
			// 'fields' => '',
			// 'order' => ''
		// )
	);
}
