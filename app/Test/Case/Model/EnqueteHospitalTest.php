<?php
App::uses('EnqueteHospital', 'Model');

/**
 * EnqueteHospital Test Case
 *
 */
class EnqueteHospitalTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.enquete_hospital',
		'app.enquete',
		'app.hospital'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EnqueteHospital = ClassRegistry::init('EnqueteHospital');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EnqueteHospital);

		parent::tearDown();
	}

}
