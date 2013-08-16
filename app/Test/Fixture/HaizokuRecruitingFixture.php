<?php
/**
 * HaizokuRecruitingFixture
 *
 */
class HaizokuRecruitingFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'haizoku_recruiting';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'recruiting_id' => array('type' => 'integer', 'null' => false),
		'haizoku' => array('type' => 'integer', 'null' => true),
		'status' => array('type' => 'integer', 'null' => true),
		'insert_date' => array('type' => 'datetime', 'null' => true),
		'update_date' => array('type' => 'datetime', 'null' => true),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id'),
			'recruiting_id_idx' => array('unique' => false, 'column' => 'recruiting_id')
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
			'recruiting_id' => 1,
			'haizoku' => 1,
			'status' => 1,
			'insert_date' => '2013-08-16 06:45:31',
			'update_date' => '2013-08-16 06:45:31'
		),
	);

}
