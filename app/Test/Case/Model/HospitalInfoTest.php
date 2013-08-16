<?php
App::uses('HospitalInfo', 'Model');

/**
 * HospitalInfo Test Case
 *
 */
class HospitalInfoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hospital_info',
		'app.hospital',
		'app.photo',
		'app.hospital_photo',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HospitalInfo = ClassRegistry::init('HospitalInfo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HospitalInfo);

		parent::tearDown();
	}

}
