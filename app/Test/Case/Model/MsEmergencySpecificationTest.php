<?php
App::uses('MsEmergencySpecification', 'Model');

/**
 * MsEmergencySpecification Test Case
 *
 */
class MsEmergencySpecificationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ms_emergency_specification'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MsEmergencySpecification = ClassRegistry::init('MsEmergencySpecification');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MsEmergencySpecification);

		parent::tearDown();
	}

}
