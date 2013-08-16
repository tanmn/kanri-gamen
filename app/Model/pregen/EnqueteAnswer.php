<?php
App::uses('AppModel', 'Model');
/**
 * EnqueteAnswer Model
 *
 * @property EnquetePost $EnquetePost
 * @property EnqueteQuestion $EnqueteQuestion
 */
class EnqueteAnswer extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'enquete_answer';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'enquete_post_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'enquete_question_id' => array(
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
		'EnquetePost' => array(
			'className' => 'EnquetePost',
			'foreignKey' => 'enquete_post_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'EnqueteQuestion' => array(
			'className' => 'EnqueteQuestion',
			'foreignKey' => 'enquete_question_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
