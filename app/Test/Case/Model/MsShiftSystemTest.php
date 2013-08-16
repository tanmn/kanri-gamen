<?php
App::uses('MsShiftSystem', 'Model');

/**
 * MsShiftSystem Test Case
 *
 */
class MsShiftSystemTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ms_shift_system'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MsShiftSystem = ClassRegistry::init('MsShiftSystem');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MsShiftSystem);

		parent::tearDown();
	}

}
