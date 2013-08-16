<?php
/**
 * RecruitingWorkingStyleTimeFixture
 *
 */
class RecruitingWorkingStyleTimeFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'recruiting_working_style_time';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'hospital_data_id' => array('type' => 'integer', 'null' => true),
		'recruiting_data_id' => array('type' => 'integer', 'null' => true),
		'working_style' => array('type' => 'integer', 'null' => true),
		'start_hour' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'start_minute' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'end_hour' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'end_minute' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'status' => array('type' => 'integer', 'null' => true),
		'insert_date' => array('type' => 'datetime', 'null' => true),
		'update_date' => array('type' => 'datetime', 'null' => true),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id'),
			'hospital_data_wst_id_idx' => array('unique' => false, 'column' => 'hospital_data_id'),
			'hospital_recruiting_wst_id_idx' => array('unique' => false, 'column' => array('hospital_data_id', 'recruiting_data_id')),
			'recruiting_data_wst_id_idx' => array('unique' => false, 'column' => 'recruiting_data_id')
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
			'working_style' => 1,
			'start_hour' => 1,
			'start_minute' => 1,
			'end_hour' => 1,
			'end_minute' => 1,
			'status' => 1,
			'insert_date' => '2013-08-16 06:57:29',
			'update_date' => '2013-08-16 06:57:29'
		),
	);

}
