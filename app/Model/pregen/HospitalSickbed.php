<?php
App::uses('AppModel', 'Model');
/**
 * HospitalSickbed Model
 *
 * @property HospitalData $HospitalData
 */
class HospitalSickbed extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'hospital_sickbed';


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
		)
	);
}
