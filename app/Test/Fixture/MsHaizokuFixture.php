<?php
/**
 * MsHaizokuFixture
 *
 */
class MsHaizokuFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'ms_haizoku';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'haizoku_name' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'status' => array('type' => 'integer', 'null' => true),
		'insert_date' => array('type' => 'datetime', 'null' => true, 'default' => 'now()'),
		'update_date' => array('type' => 'datetime', 'null' => true),
		'disp_name' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id'),
			'ms_haizoku_pki' => array('unique' => true, 'column' => 'id')
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
			'haizoku_name' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'status' => 1,
			'insert_date' => '2013-08-16 06:47:45',
			'update_date' => '2013-08-16 06:47:45',
			'disp_name' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
