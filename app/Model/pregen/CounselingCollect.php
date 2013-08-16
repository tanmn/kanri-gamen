<?php
App::uses('AppModel', 'Model');
/**
 * CounselingCollect Model
 *
 * @property Case $Case
 * @property Archive $Archive
 * @property Counselor $Counselor
 */
class CounselingCollect extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'counseling_collect';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'case_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'disp_flg' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'popular_flg' => array(
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
		'Case' => array(
			'className' => 'Case',
			'foreignKey' => 'case_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Archive' => array(
			'className' => 'Archive',
			'foreignKey' => 'archive_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Counselor' => array(
			'className' => 'Counselor',
			'foreignKey' => 'counselor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
