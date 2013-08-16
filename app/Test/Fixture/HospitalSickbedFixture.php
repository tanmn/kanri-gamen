<?php
/**
 * HospitalSickbedFixture
 *
 */
class HospitalSickbedFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'hospital_sickbed';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'hospital_data_id' => array('type' => 'integer', 'null' => true),
		'type' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'number' => array('type' => 'integer', 'null' => true),
		'status' => array('type' => 'integer', 'null' => true, 'default' => '2'),
		'insert_date' => array('type' => 'datetime', 'null' => true, 'default' => 'now()'),
		'update_date' => array('type' => 'datetime', 'null' => true),
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
			'hospital_data_id' => 1,
			'type' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'number' => 1,
			'status' => 1,
			'insert_date' => '2013-08-16 06:46:21',
			'update_date' => '2013-08-16 06:46:21'
		),
	);

}
