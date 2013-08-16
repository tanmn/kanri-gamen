<?php
/**
 * RecruitingBenefitFixture
 *
 */
class RecruitingBenefitFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'hospital_data_id' => array('type' => 'integer', 'null' => true),
		'recruiting_data_id' => array('type' => 'integer', 'null' => true),
		'benefits' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'brow' => array('type' => 'integer', 'null' => true),
		'status' => array('type' => 'integer', 'null' => true),
		'insert_date' => array('type' => 'datetime', 'null' => true, 'default' => 'now()'),
		'update_date' => array('type' => 'datetime', 'null' => true),
		'benefits_detail' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'brow_min' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id'),
			'hospital_data_id_idx' => array('unique' => false, 'column' => 'hospital_data_id'),
			'hospital_recruiting_id_idx' => array('unique' => false, 'column' => array('hospital_data_id', 'recruiting_data_id')),
			'recruiting_data_id_idx' => array('unique' => false, 'column' => 'recruiting_data_id')
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
			'recruiting_data_id' => 1,
			'benefits' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'brow' => 1,
			'status' => 1,
			'insert_date' => '2013-08-16 06:55:49',
			'update_date' => '2013-08-16 06:55:49',
			'benefits_detail' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'brow_min' => 1
		),
	);

}
