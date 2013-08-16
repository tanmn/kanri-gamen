<?php
/**
 * EnqueteAnswerFixture
 *
 */
class EnqueteAnswerFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'enquete_answer';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'enquete_post_id' => array('type' => 'integer', 'null' => false),
		'enquete_question_id' => array('type' => 'integer', 'null' => false),
		'value' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
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
			'enquete_post_id' => 1,
			'enquete_question_id' => 1,
			'value' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'insert_date' => '2013-08-16 06:45:05',
			'update_date' => '2013-08-16 06:45:05'
		),
	);

}
