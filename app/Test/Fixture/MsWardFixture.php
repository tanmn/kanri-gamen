<?php
/**
 * MsWardFixture
 *
 */
class MsWardFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'ms_ward';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'prefecture_cd' => array('type' => 'integer', 'null' => true),
		'ward_cd' => array('type' => 'integer', 'null' => false),
		'ward_name' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'ward_name_kana' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'seirei' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'parent_seirei_ward_cd' => array('type' => 'integer', 'null' => true),
		'h_count' => array('type' => 'integer', 'null' => true),
		'r_count' => array('type' => 'integer', 'null' => true),
		'norh_count' => array('type' => 'integer', 'null' => true),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'ward_cd'),
			'parent_seirei_ward_cd_idx' => array('unique' => false, 'column' => 'parent_seirei_ward_cd')
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
			'prefecture_cd' => 1,
			'ward_cd' => 1,
			'ward_name' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'ward_name_kana' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'seirei' => 1,
			'parent_seirei_ward_cd' => 1,
			'h_count' => 1,
			'r_count' => 1,
			'norh_count' => 1
		),
	);

}
