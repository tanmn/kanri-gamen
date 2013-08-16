<?php
App::uses('ShortMessage', 'Model');

/**
 * ShortMessage Test Case
 *
 */
class ShortMessageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.short_message',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ShortMessage = ClassRegistry::init('ShortMessage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ShortMessage);

		parent::tearDown();
	}

}
