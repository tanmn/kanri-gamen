<?php
/**
 * CounselingCollectFixture
 *
 */
class CounselingCollectFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'counseling_collect';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'case_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'title' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'contents' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'keywords' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'insert_date' => array('type' => 'datetime', 'null' => true),
		'update_date' => array('type' => 'datetime', 'null' => true),
		'archive_id' => array('type' => 'integer', 'null' => true),
		'disp_flg' => array('type' => 'integer', 'null' => false),
		'category' => array('type' => 'integer', 'null' => true),
		'popular_flg' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'counselor_id' => array('type' => 'integer', 'null' => true),
		'view_cnt' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'case_id')
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
			'case_id' => 1,
			'title' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'contents' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'keywords' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'insert_date' => '2013-08-16 06:44:56',
			'update_date' => '2013-08-16 06:44:56',
			'archive_id' => 1,
			'disp_flg' => 1,
			'category' => 1,
			'popular_flg' => 1,
			'counselor_id' => 1,
			'view_cnt' => 1
		),
	);

}
