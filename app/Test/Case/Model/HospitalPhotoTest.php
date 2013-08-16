<?php
App::uses('HospitalPhoto', 'Model');

/**
 * HospitalPhoto Test Case
 *
 */
class HospitalPhotoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hospital_photo',
		'app.hospital_info',
		'app.hospital',
		'app.photo',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HospitalPhoto = ClassRegistry::init('HospitalPhoto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HospitalPhoto);

		parent::tearDown();
	}

}
