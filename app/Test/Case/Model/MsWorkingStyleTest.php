<?php
App::uses('MsWorkingStyle', 'Model');

/**
 * MsWorkingStyle Test Case
 *
 */
class MsWorkingStyleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ms_working_style',
		'app.time',
		'app.ms_working_style_time'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MsWorkingStyle = ClassRegistry::init('MsWorkingStyle');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MsWorkingStyle);

		parent::tearDown();
	}

}
