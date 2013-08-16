<?php
/**
 * EnqueteHospitalFixture
 *
 */
class EnqueteHospitalFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'enquete_hospital';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'enquete_id' => array('type' => 'integer', 'null' => false),
		'hospital_id' => array('type' => 'integer', 'null' => false),
		'insert_date' => array('type' => 'datetime', 'null' => true),
		'update_date' => array('type' => 'datetime', 'null' => true),
		'indexes' => array(
			
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
			'enquete_id' => 1,
			'hospital_id' => 1,
			'insert_date' => '2013-08-16 06:45:09',
			'update_date' => '2013-08-16 06:45:09'
		),
	);

}
