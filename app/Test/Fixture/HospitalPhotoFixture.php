<?php
/**
 * HospitalPhotoFixture
 *
 */
class HospitalPhotoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => 'nextval((\'public.hospital_photos_id_seq\'', 'length' => 11, 'key' => 'primary'),
		'hospital_info_id' => array('type' => 'integer', 'null' => false),
		'photo_id' => array('type' => 'integer', 'null' => true),
		'description' => array('type' => 'string', 'null' => true, 'length' => 300),
		'delete_flag' => array('type' => 'boolean', 'null' => false),
		'modified_by' => array('type' => 'integer', 'null' => true),
		'modified_date' => array('type' => 'datetime', 'null' => true),
		'created_by' => array('type' => 'integer', 'null' => false),
		'created_date' => array('type' => 'datetime', 'null' => false),
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
			'hospital_info_id' => 1,
			'photo_id' => 1,
			'description' => 'Lorem ipsum dolor sit amet',
			'delete_flag' => 1,
			'modified_by' => 1,
			'modified_date' => '2013-08-16 06:45:54',
			'created_by' => 1,
			'created_date' => '2013-08-16 06:45:54'
		),
	);

}
