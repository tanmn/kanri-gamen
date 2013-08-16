<?php
/**
 * PhotoKoFixture
 *
 */
class PhotoKoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'photo_ko';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'filename' => array('type' => 'text', 'null' => false, 'length' => 1073741824),
		'target_id' => array('type' => 'integer', 'null' => false),
		'insert_date' => array('type' => 'datetime', 'null' => false),
		'update_date' => array('type' => 'datetime', 'null' => false),
		'target_flag' => array('type' => 'integer', 'null' => true),
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
			'filename' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'target_id' => 1,
			'insert_date' => '2013-08-16 06:52:18',
			'update_date' => '2013-08-16 06:52:18',
			'target_flag' => 1
		),
	);

}
