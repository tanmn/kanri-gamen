<?php
/**
 * BusinessGroupListFixture
 *
 */
class BusinessGroupListFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'business_group_list';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'group_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'parent_group_id' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'group_name' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'status' => array('type' => 'integer', 'null' => true, 'default' => '1'),
		'leader_id' => array('type' => 'integer', 'null' => true),
		'sort_id' => array('type' => 'integer', 'null' => true),
		'office_id' => array('type' => 'integer', 'null' => true, 'default' => '1'),
		'charge_area' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'newspaper_list_disp_flg' => array('type' => 'integer', 'null' => false, 'default' => '1'),
		'process_list_disp_flg' => array('type' => 'integer', 'null' => false, 'default' => '1'),
		'rankseeker_list_disp_flg' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'group_id')
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
			'group_id' => 1,
			'parent_group_id' => 1,
			'group_name' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'status' => 1,
			'leader_id' => 1,
			'sort_id' => 1,
			'office_id' => 1,
			'charge_area' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'newspaper_list_disp_flg' => 1,
			'process_list_disp_flg' => 1,
			'rankseeker_list_disp_flg' => 1
		),
	);

}
