<?php
/**
 * PhotoFixture
 *
 */
class PhotoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => 'nextval((\'public.photos_id_seq\'', 'length' => 11, 'key' => 'primary'),
		'filename' => array('type' => 'string', 'null' => false, 'length' => 40),
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
			'filename' => 'Lorem ipsum dolor sit amet',
			'delete_flag' => 1,
			'modified_by' => 1,
			'modified_date' => '2013-08-16 06:52:33',
			'created_by' => 1,
			'created_date' => '2013-08-16 06:52:33'
		),
	);

}
