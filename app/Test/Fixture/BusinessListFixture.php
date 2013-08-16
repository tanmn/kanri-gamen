<?php
/**
 * BusinessListFixture
 *
 */
class BusinessListFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'business_list';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'business_name' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'business_name_kana' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'login_id' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'password' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'status' => array('type' => 'integer', 'null' => true),
		'last_login_date' => array('type' => 'datetime', 'null' => true),
		'insert_date' => array('type' => 'datetime', 'null' => true, 'default' => 'now()'),
		'update_date' => array('type' => 'datetime', 'null' => true),
		'sort_id' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'group_id' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'hospital_download_able' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'job_seeker_download_able' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'entry_download_able' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'mail_address' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'target' => array('type' => 'integer', 'null' => true),
		'accounting_able' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'last_hiringdlg_conf_date' => array('type' => 'datetime', 'null' => true),
		'transfer_message_date' => array('type' => 'datetime', 'null' => true),
		'admin_approval_able' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'forgery_able' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'last_before_hiring_check_date' => array('type' => 'datetime', 'null' => true),
		'last_group_hiring_check_date' => array('type' => 'datetime', 'null' => true),
		'extended_number' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'hud_userid' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'hud_password' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'hospital_approval_able' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'left_date' => array('type' => 'datetime', 'null' => true),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id'),
			'business_list_pki' => array('unique' => true, 'column' => 'id')
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
			'business_name' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'business_name_kana' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'login_id' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'password' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'status' => 1,
			'last_login_date' => '2013-08-16 06:44:43',
			'insert_date' => '2013-08-16 06:44:43',
			'update_date' => '2013-08-16 06:44:43',
			'sort_id' => 1,
			'group_id' => 1,
			'hospital_download_able' => 1,
			'job_seeker_download_able' => 1,
			'entry_download_able' => 1,
			'mail_address' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'target' => 1,
			'accounting_able' => 1,
			'last_hiringdlg_conf_date' => '2013-08-16 06:44:43',
			'transfer_message_date' => '2013-08-16 06:44:43',
			'admin_approval_able' => 1,
			'forgery_able' => 1,
			'last_before_hiring_check_date' => '2013-08-16 06:44:43',
			'last_group_hiring_check_date' => '2013-08-16 06:44:43',
			'extended_number' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'hud_userid' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'hud_password' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'hospital_approval_able' => 1,
			'left_date' => '2013-08-16 06:44:43'
		),
	);

}
