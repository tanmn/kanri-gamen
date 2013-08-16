<?php
/**
 * IntroductionFixture
 *
 */
class IntroductionFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'introduction';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'entry_id' => array('type' => 'integer', 'null' => true),
		'intro_user_name' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'intro_user_name_kana' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'intro_prefecture' => array('type' => 'integer', 'null' => true),
		'js_id' => array('type' => 'integer', 'null' => true),
		'business_id' => array('type' => 'integer', 'null' => true),
		'insert_date' => array('type' => 'datetime', 'null' => true, 'default' => 'now()'),
		'update_date' => array('type' => 'datetime', 'null' => true),
		'indexes' => array(
			
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
			'entry_id' => 1,
			'intro_user_name' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'intro_user_name_kana' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'intro_prefecture' => 1,
			'js_id' => 1,
			'business_id' => 1,
			'insert_date' => '2013-08-16 06:46:38',
			'update_date' => '2013-08-16 06:46:38'
		),
	);

}
