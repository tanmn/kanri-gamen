<?php
App::uses('HospitalSickbed', 'Model');

/**
 * HospitalSickbed Test Case
 *
 */
class HospitalSickbedTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hospital_sickbed',
		'app.hospital_data'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HospitalSickbed = ClassRegistry::init('HospitalSickbed');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HospitalSickbed);

		parent::tearDown();
	}

}
