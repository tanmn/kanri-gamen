<?php
App::uses('HaizokuRecruiting', 'Model');

/**
 * HaizokuRecruiting Test Case
 *
 */
class HaizokuRecruitingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.haizoku_recruiting',
		'app.recruiting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HaizokuRecruiting = ClassRegistry::init('HaizokuRecruiting');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HaizokuRecruiting);

		parent::tearDown();
	}

}
