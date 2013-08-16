<?php
/**
 * BusinessPhotoFixture
 *
 */
class BusinessPhotoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'business_photo';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'business_data_id' => array('type' => 'integer', 'null' => false),
		'photo_id' => array('type' => 'integer', 'null' => false),
		'disp_no' => array('type' => 'integer', 'null' => false),
		'insert_date' => array('type' => 'datetime', 'null' => false),
		'update_date' => array('type' => 'datetime', 'null' => false),
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
			'business_data_id' => 1,
			'photo_id' => 1,
			'disp_no' => 1,
			'insert_date' => '2013-08-16 06:44:48',
			'update_date' => '2013-08-16 06:44:48'
		),
	);

}
