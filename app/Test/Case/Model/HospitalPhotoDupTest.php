<?php
App::uses('HospitalPhotoDup', 'Model');

/**
 * HospitalPhotoDup Test Case
 *
 */
class HospitalPhotoDupTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hospital_photo_dup',
		'app.hospital_data',
		'app.photo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HospitalPhotoDup = ClassRegistry::init('HospitalPhotoDup');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HospitalPhotoDup);

		parent::tearDown();
	}

}
