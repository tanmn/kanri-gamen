<?php
/**
 * UserFixture
 *
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => 'nextval((\'public.users_id_seq\'', 'length' => 11, 'key' => 'primary'),
		'login_id' => array('type' => 'string', 'null' => false, 'length' => 10),
		'login_cd' => array('type' => 'string', 'null' => true, 'length' => 40),
		'password' => array('type' => 'string', 'null' => false, 'length' => 40),
		'hospital_info_id' => array('type' => 'integer', 'null' => false),
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
			'login_id' => 'Lorem ip',
			'login_cd' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'hospital_info_id' => 1,
			'delete_flag' => 1,
			'modified_by' => 1,
			'modified_date' => '2013-08-16 06:59:19',
			'created_by' => 1,
			'created_date' => '2013-08-16 06:59:19'
		),
	);

}
