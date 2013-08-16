<?php
App::uses('DocodocoDatum', 'Model');

/**
 * DocodocoDatum Test Case
 *
 */
class DocodocoDatumTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.docodoco_datum'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DocodocoDatum = ClassRegistry::init('DocodocoDatum');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DocodocoDatum);

		parent::tearDown();
	}

}
