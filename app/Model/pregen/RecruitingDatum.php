<?php
App::uses('AppModel', 'Model');
/**
 * RecruitingDatum Model
 *
 * @property HospitalData $HospitalData
 * @property Qualification $Qualification
 * @property WorkingStyle $WorkingStyle
 * @property Haizoku $Haizoku
 * @property TransportationCosts $TransportationCosts
 * @property ShiftSystem $ShiftSystem
 * @property Holiday $Holiday
 * @property CarCommuting $CarCommuting
 * @property Business $Business
 * @property OrderRank $OrderRank
 * @property Proagent $Proagent
 * @property HistoryBusiness $HistoryBusiness
 * @property Copy $Copy
 * @property FinallyUpdatedBusiness $FinallyUpdatedBusiness
 * @property Lp $Lp
 */
class RecruitingDatum extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'hospital_data_id' => array(
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
		'HospitalData' => array(
			'className' => 'HospitalData',
			'foreignKey' => 'hospital_data_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Qualification' => array(
			'className' => 'Qualification',
			'foreignKey' => 'qualification_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'WorkingStyle' => array(
			'className' => 'WorkingStyle',
			'foreignKey' => 'working_style_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Haizoku' => array(
			'className' => 'Haizoku',
			'foreignKey' => 'haizoku_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TransportationCosts' => array(
			'className' => 'TransportationCosts',
			'foreignKey' => 'transportation_costs_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ShiftSystem' => array(
			'className' => 'ShiftSystem',
			'foreignKey' => 'shift_system_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Holiday' => array(
			'className' => 'Holiday',
			'foreignKey' => 'holiday_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'CarCommuting' => array(
			'className' => 'CarCommuting',
			'foreignKey' => 'car_commuting_id',
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
		),
		'OrderRank' => array(
			'className' => 'OrderRank',
			'foreignKey' => 'order_rank_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Proagent' => array(
			'className' => 'Proagent',
			'foreignKey' => 'proagent_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'HistoryBusiness' => array(
			'className' => 'HistoryBusiness',
			'foreignKey' => 'history_business_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Copy' => array(
			'className' => 'Copy',
			'foreignKey' => 'copy_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'FinallyUpdatedBusiness' => array(
			'className' => 'FinallyUpdatedBusiness',
			'foreignKey' => 'finally_updated_business_id',
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
		'Lp' => array(
			'className' => 'Lp',
			'joinTable' => 'lp_recruiting_data',
			'foreignKey' => 'recruiting_datum_id',
			'associationForeignKey' => 'lp_id',
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
