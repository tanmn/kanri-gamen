<?php
App::uses('MsHaizoku', 'Model');

/**
 * MsHaizoku Test Case
 *
 */
class MsHaizokuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ms_haizoku'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MsHaizoku = ClassRegistry::init('MsHaizoku');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MsHaizoku);

		parent::tearDown();
	}

}
