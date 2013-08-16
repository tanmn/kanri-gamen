<?php
App::uses('ConsiderLog', 'Model');

/**
 * ConsiderLog Test Case
 *
 */
class ConsiderLogTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.consider_log',
		'app.add',
		'app.session'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ConsiderLog = ClassRegistry::init('ConsiderLog');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ConsiderLog);

		parent::tearDown();
	}

}
