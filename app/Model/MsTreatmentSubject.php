<?php
App::uses('AppModel', 'Model');
/**
 * MsTreatmentSubject Model
 *
 * @property HospitalDatum $HospitalDatum
 */
class MsTreatmentSubject extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'ms_treatment_subject';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'HospitalDatum' => array(
			'className' => 'HospitalDatum',
			'joinTable' => 'hospital_data_ms_treatment_subject',
			'foreignKey' => 'ms_treatment_subject_id',
			'associationForeignKey' => 'hospital_datum_id',
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
