<?php
App::uses('InputErrorLog', 'Model');

/**
 * InputErrorLog Test Case
 *
 */
class InputErrorLogTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.input_error_log',
		'app.session'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->InputErrorLog = ClassRegistry::init('InputErrorLog');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->InputErrorLog);

		parent::tearDown();
	}

}
