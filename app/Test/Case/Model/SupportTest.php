<?php
App::uses('Support', 'Model');

/**
 * Support Test Case
 *
 */
class SupportTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.support'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Support = ClassRegistry::init('Support');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Support);

		parent::tearDown();
	}

}
