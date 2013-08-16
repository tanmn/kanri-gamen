<?php
/**
 * HospitalDataMsTreatmentSubjectFixture
 *
 */
class HospitalDataMsTreatmentSubjectFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'hospital_data_ms_treatment_subject';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'hospital_data_id' => array('type' => 'integer', 'null' => false),
		'treatment_subject_id' => array('type' => 'integer', 'null' => false),
		'status' => array('type' => 'integer', 'null' => true, 'default' => '1'),
		'insert_date' => array('type' => 'datetime', 'null' => true),
		'update_date' => array('type' => 'datetime', 'null' => true),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => array('id', 'hospital_data_id', 'treatment_subject_id')),
			'hospital_date_ms_treatment_subject_pki' => array('unique' => true, 'column' => array('id', 'hospital_data_id', 'treatment_subject_id')),
			'hospital_data_ms_treatment_subject_hospital_data_id' => array('unique' => false, 'column' => array('hospital_data_id', 'treatment_subject_id')),
			'hospital_data_ms_treatment_subject_tsid' => array('unique' => false, 'column' => 'treatment_subject_id')
		),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'hospital_data_id' => 1,
			'treatment_subject_id' => 1,
			'status' => 1,
			'insert_date' => '2013-08-16 06:46:11',
			'update_date' => '2013-08-16 06:46:11'
		),
	);

}
