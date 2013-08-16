<?php
App::uses('GeneralUser', 'Model');

/**
 * GeneralUser Test Case
 *
 */
class GeneralUserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.general_user',
		'app.resume',
		'app.access'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GeneralUser = ClassRegistry::init('GeneralUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GeneralUser);

		parent::tearDown();
	}

}
