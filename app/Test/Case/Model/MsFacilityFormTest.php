<?php
App::uses('MsFacilityForm', 'Model');

/**
 * MsFacilityForm Test Case
 *
 */
class MsFacilityFormTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ms_facility_form'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MsFacilityForm = ClassRegistry::init('MsFacilityForm');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MsFacilityForm);

		parent::tearDown();
	}

}
