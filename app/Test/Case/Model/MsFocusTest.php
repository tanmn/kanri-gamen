<?php
App::uses('MsFocus', 'Model');

/**
 * MsFocus Test Case
 *
 */
class MsFocusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ms_focus'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MsFocus = ClassRegistry::init('MsFocus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MsFocus);

		parent::tearDown();
	}

}
