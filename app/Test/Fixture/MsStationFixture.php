<?php
/**
 * MsStationFixture
 *
 */
class MsStationFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'ms_station';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'rr_cd' => array('type' => 'integer', 'null' => true),
		'line_cd' => array('type' => 'integer', 'null' => false),
		'station_cd' => array('type' => 'integer', 'null' => false),
		'line_sote' => array('type' => 'integer', 'null' => false),
		'station_sort' => array('type' => 'integer', 'null' => true),
		'station_g_cd' => array('type' => 'integer', 'null' => true),
		'r_type' => array('type' => 'integer', 'null' => true),
		'rr_name' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'line_name' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'station_name' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'pref_cd' => array('type' => 'integer', 'null' => true),
		'lon' => array('type' => 'float', 'null' => true),
		'lat' => array('type' => 'float', 'null' => true),
		'f_flag' => array('type' => 'integer', 'null' => true),
		'h_count' => array('type' => 'integer', 'null' => true),
		'r_count' => array('type' => 'integer', 'null' => true),
		'norh_count' => array('type' => 'integer', 'null' => true),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => array('line_cd', 'station_cd', 'line_sote'))
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
			'rr_cd' => 1,
			'line_cd' => 1,
			'station_cd' => 1,
			'line_sote' => 1,
			'station_sort' => 1,
			'station_g_cd' => 1,
			'r_type' => 1,
			'rr_name' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'line_name' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'station_name' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'pref_cd' => 1,
			'lon' => 1,
			'lat' => 1,
			'f_flag' => 1,
			'h_count' => 1,
			'r_count' => 1,
			'norh_count' => 1
		),
	);

}
