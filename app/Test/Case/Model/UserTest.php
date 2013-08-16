<?php
App::uses('User', 'Model');

/**
 * User Test Case
 *
 */
class UserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user',
		'app.login',
		'app.hospital_info',
		'app.hospital',
		'app.photo',
		'app.business_photo',
		'app.business_data',
		'app.hospital_photo_dup',
		'app.hospital_data',
		'app.hospital_photo',
		'app.access_info',
		'app.entry',
		'app.recruiting_data',
		'app.af_asp',
		'app.access',
		'app.introduction',
		'app.js',
		'app.business',
		'app.business_introduction',
		'app.ga_datum',
		'app.entry_ga_datum',
		'app.transition',
		'app.session',
		'app.enquete_post',
		'app.enquete',
		'app.sub',
		'app.enquete_answer',
		'app.enquete_question',
		'app.short_message'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->User = ClassRegistry::init('User');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->User);

		parent::tearDown();
	}

}
