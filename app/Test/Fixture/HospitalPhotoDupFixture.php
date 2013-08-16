<?php
/**
 * HospitalPhotoDupFixture
 *
 */
class HospitalPhotoDupFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'hospital_data_id' => array('type' => 'integer', 'null' => false),
		'photo_id' => array('type' => 'integer', 'null' => false),
		'disp_no' => array('type' => 'integer', 'null' => false),
		'insert_date' => array('type' => 'datetime', 'null' => false),
		'update_date' => array('type' => 'datetime', 'null' => false),
		'comment_of_photo' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id'),
			'HospitalPhoto_hospital_data_id_disp_no_idx' => array('unique' => false, 'column' => array('hospital_data_id', 'disp_no')),
			'HospitalPhoto_hospital_data_id_idx' => array('unique' => false, 'column' => 'hospital_data_id')
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
			'photo_id' => 1,
			'disp_no' => 1,
			'insert_date' => '2013-08-16 06:46:16',
			'update_date' => '2013-08-16 06:46:16',
			'comment_of_photo' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
