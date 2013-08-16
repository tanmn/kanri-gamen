<?php
App::uses('MsNursingStandard', 'Model');

/**
 * MsNursingStandard Test Case
 *
 */
class MsNursingStandardTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ms_nursing_standard'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MsNursingStandard = ClassRegistry::init('MsNursingStandard');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MsNursingStandard);

		parent::tearDown();
	}

}
