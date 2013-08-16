<?php
/**
 * RecruitingWorkSystemFixture
 *
 */
class RecruitingWorkSystemFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'recruiting_work_system';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'hospital_data_id' => array('type' => 'integer', 'null' => false),
		'recruiting_data_id' => array('type' => 'integer', 'null' => false),
		'work_system' => array('type' => 'integer', 'null' => false),
		'status' => array('type' => 'integer', 'null' => false),
		'insert_date' => array('type' => 'datetime', 'null' => false),
		'update_date' => array('type' => 'datetime', 'null' => true),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id'),
			'hospital_data_ws_id_idx' => array('unique' => false, 'column' => 'hospital_data_id'),
			'hospital_recruiting_ws_id_idx' => array('unique' => false, 'column' => array('hospital_data_id', 'recruiting_data_id')),
			'recruiting_data_ws_id_idx' => array('unique' => false, 'column' => 'recruiting_data_id')
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
			'recruiting_data_id' => 1,
			'work_system' => 1,
			'status' => 1,
			'insert_date' => '2013-08-16 06:57:23',
			'update_date' => '2013-08-16 06:57:23'
		),
	);

}
