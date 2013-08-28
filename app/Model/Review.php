<?php
App::uses('AppModel', 'Model');
/**
 * Review Model
 *
 * @property Hospital $Hospital
 * @property HospitalNurse $HospitalNurse
 * @property Hospital $Hospital
 */
class Review extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'review';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'hospital_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'This field could not be empty',
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
		// 'Hospital' => array(
			// 'className' => 'Hospital',
			// 'foreignKey' => 'hospital_id',
			// 'conditions' => '',
			// 'fields' => '',
			// 'order' => ''
		// )
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		// 'HospitalNurse' => array(
			// 'className' => 'HospitalNurse',
			// 'joinTable' => 'hospital_nurse_review',
			// 'foreignKey' => 'review_id',
			// 'associationForeignKey' => 'hospital_nurse_id',
			// 'unique' => 'keepExisting',
			// 'conditions' => '',
			// 'fields' => '',
			// 'order' => '',
			// 'limit' => '',
			// 'offset' => '',
			// 'finderQuery' => '',
			// 'deleteQuery' => '',
			// 'insertQuery' => ''
		// ),
		// 'Hospital' => array(
			// 'className' => 'Hospital',
			// 'joinTable' => 'hospital_review',
			// 'foreignKey' => 'review_id',
			// 'associationForeignKey' => 'hospital_id',
			// 'unique' => 'keepExisting',
			// 'conditions' => '',
			// 'fields' => '',
			// 'order' => '',
			// 'limit' => '',
			// 'offset' => '',
			// 'finderQuery' => '',
			// 'deleteQuery' => '',
			// 'insertQuery' => ''
		// )
	);

    public function afterSave($created) {
        $array['ReviewerName']['name'] = $this->data['Review']['name'];
        App::import('Model', 'ReviewerName');
        $this->ReviewerName = new ReviewerName();
        $this->ReviewerName->create();
        $this->ReviewerName->save($array);
    }
}
