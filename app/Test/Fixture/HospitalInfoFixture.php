<?php
/**
 * HospitalInfoFixture
 *
 */
class HospitalInfoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => 'nextval((\'public.hospital_infos_id_seq\'', 'length' => 11, 'key' => 'primary'),
		'hospital_id' => array('type' => 'integer', 'null' => true),
		'hospital_email' => array('type' => 'string', 'null' => true, 'length' => 40),
		'hiring_year' => array('type' => 'integer', 'null' => true),
		'position' => array('type' => 'string', 'null' => true, 'length' => 40),
		'photo_id' => array('type' => 'integer', 'null' => true),
		'msg_to_candidate' => array('type' => 'string', 'null' => false, 'length' => 300),
		'approved_by' => array('type' => 'integer', 'null' => true),
		'approved_date' => array('type' => 'datetime', 'null' => true),
		'delete_flag' => array('type' => 'boolean', 'null' => false),
		'modified_by' => array('type' => 'integer', 'null' => true),
		'modified_date' => array('type' => 'datetime', 'null' => true),
		'created_by' => array('type' => 'integer', 'null' => false),
		'created_date' => array('type' => 'datetime', 'null' => false),
		'status' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'msg_to_candidate2' => array('type' => 'string', 'null' => true, 'length' => 300),
		'msg_to_candidate3' => array('type' => 'string', 'null' => true, 'length' => 300),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id')
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
			'hospital_id' => 1,
			'hospital_email' => 'Lorem ipsum dolor sit amet',
			'hiring_year' => 1,
			'position' => 'Lorem ipsum dolor sit amet',
			'photo_id' => 1,
			'msg_to_candidate' => 'Lorem ipsum dolor sit amet',
			'approved_by' => 1,
			'approved_date' => '2013-08-16 06:45:45',
			'delete_flag' => 1,
			'modified_by' => 1,
			'modified_date' => '2013-08-16 06:45:45',
			'created_by' => 1,
			'created_date' => '2013-08-16 06:45:45',
			'status' => 1,
			'msg_to_candidate2' => 'Lorem ipsum dolor sit amet',
			'msg_to_candidate3' => 'Lorem ipsum dolor sit amet'
		),
	);

}
