<?php
/**
 * HospitalNurseReviewFixture
 *
 */
class HospitalNurseReviewFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'hospital_nurse_review';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'hospital_data_id' => array('type' => 'integer', 'null' => false),
		'grade_1' => array('type' => 'integer', 'null' => true),
		'grade_2' => array('type' => 'integer', 'null' => true),
		'grade_3' => array('type' => 'integer', 'null' => true),
		'grade_4' => array('type' => 'integer', 'null' => true),
		'grade_5' => array('type' => 'integer', 'null' => true),
		'text_1' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'text_2' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'text_3' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'text_4' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'insert_date' => array('type' => 'datetime', 'null' => false),
		'update_date' => array('type' => 'datetime', 'null' => false),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id'),
			'hospital_nurse_review_hospital_data_id' => array('unique' => false, 'column' => 'hospital_data_id')
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
			'hospital_data_id' => 1,
			'grade_1' => 1,
			'grade_2' => 1,
			'grade_3' => 1,
			'grade_4' => 1,
			'grade_5' => 1,
			'text_1' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'text_2' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'text_3' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'text_4' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'insert_date' => '2013-08-16 06:45:49',
			'update_date' => '2013-08-16 06:45:49'
		),
	);

}
