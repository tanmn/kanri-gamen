<?php
/**
 * ConsiderLogFixture
 *
 */
class ConsiderLogFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'consider_log';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'consider_type' => array('type' => 'integer', 'null' => true),
		'add_id' => array('type' => 'integer', 'null' => true),
		'session_id' => array('type' => 'string', 'null' => true),
		'device_type' => array('type' => 'integer', 'null' => true),
		'request_uri' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'insert_date' => array('type' => 'datetime', 'null' => true),
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
			'consider_type' => 1,
			'add_id' => 1,
			'session_id' => 'Lorem ipsum dolor sit amet',
			'device_type' => 1,
			'request_uri' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'insert_date' => '2013-08-16 06:44:52'
		),
	);

}
