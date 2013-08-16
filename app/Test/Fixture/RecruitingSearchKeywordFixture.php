<?php
/**
 * RecruitingSearchKeywordFixture
 *
 */
class RecruitingSearchKeywordFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'recruiting_search_keyword';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'keyword' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'access_count' => array('type' => 'integer', 'null' => true, 'default' => '0'),
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
			'keyword' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'access_count' => 1,
			'insert_date' => '2013-08-16 06:57:09',
			'update_date' => '2013-08-16 06:57:09'
		),
	);

}
