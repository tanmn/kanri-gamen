<?php
App::uses('AppModel', 'Model');
/**
 * BusinessGroupList Model
 *
 * @property Group $Group
 * @property ParentGroup $ParentGroup
 * @property Leader $Leader
 * @property Sort $Sort
 * @property Office $Office
 */
class BusinessGroupList extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'business_group_list';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'group_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'newspaper_list_disp_flg' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'process_list_disp_flg' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'rankseeker_list_disp_flg' => array(
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
		'Group' => array(
			'className' => 'Group',
			'foreignKey' => 'group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ParentGroup' => array(
			'className' => 'ParentGroup',
			'foreignKey' => 'parent_group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Leader' => array(
			'className' => 'Leader',
			'foreignKey' => 'leader_id',
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
		'Office' => array(
			'className' => 'Office',
			'foreignKey' => 'office_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
