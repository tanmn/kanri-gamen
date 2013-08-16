<?php
App::uses('MsWard', 'Model');

/**
 * MsWard Test Case
 *
 */
class MsWardTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ms_ward'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MsWard = ClassRegistry::init('MsWard');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MsWard);

		parent::tearDown();
	}

}
