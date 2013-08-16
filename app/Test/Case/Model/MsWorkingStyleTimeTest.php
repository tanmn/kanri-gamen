<?php
App::uses('MsWorkingStyleTime', 'Model');

/**
 * MsWorkingStyleTime Test Case
 *
 */
class MsWorkingStyleTimeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ms_working_style_time'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MsWorkingStyleTime = ClassRegistry::init('MsWorkingStyleTime');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MsWorkingStyleTime);

		parent::tearDown();
	}

}
