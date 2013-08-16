<?php
/**
 * MsPrefectureFixture
 *
 */
class MsPrefectureFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'ms_prefecture';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'prefecture_cd' => array('type' => 'integer', 'null' => false),
		'prefecture_name' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'prefecture_name_kana' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'seirei' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'h_count' => array('type' => 'integer', 'null' => true),
		'r_count' => array('type' => 'integer', 'null' => true),
		'prefecture_name_en' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'norh_count' => array('type' => 'integer', 'null' => true),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'prefecture_cd'),
			'mp_ind_prefecture_cd' => array('unique' => false, 'column' => 'prefecture_cd')
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
			'prefecture_name' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'prefecture_name_kana' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'seirei' => 1,
			'h_count' => 1,
			'r_count' => 1,
			'prefecture_name_en' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'norh_count' => 1
		),
	);

}
