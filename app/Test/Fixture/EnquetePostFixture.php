<?php
/**
 * EnquetePostFixture
 *
 */
class EnquetePostFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'enquete_post';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'enquete_id' => array('type' => 'integer', 'null' => false),
		'user_id' => array('type' => 'text', 'null' => false, 'length' => 1073741824),
		'sub_id' => array('type' => 'integer', 'null' => true),
		'insert_date' => array('type' => 'datetime', 'null' => true, 'default' => 'now()'),
		'update_date' => array('type' => 'datetime', 'null' => true, 'default' => 'now()'),
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
			'enquete_id' => 1,
			'user_id' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'sub_id' => 1,
			'insert_date' => '2013-08-16 06:45:14',
			'update_date' => '2013-08-16 06:45:14'
		),
	);

}
