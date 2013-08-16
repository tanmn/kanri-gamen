<?php
App::uses('AccessInfo', 'Model');

/**
 * AccessInfo Test Case
 *
 */
class AccessInfoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.access_info',
		'app.user',
		'app.entry',
		'app.transition',
		'app.session'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AccessInfo = ClassRegistry::init('AccessInfo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AccessInfo);

		parent::tearDown();
	}

}
