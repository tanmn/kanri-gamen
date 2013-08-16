<?php
App::uses('HospitalSearchFreeword', 'Model');

/**
 * HospitalSearchFreeword Test Case
 *
 */
class HospitalSearchFreewordTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hospital_search_freeword'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HospitalSearchFreeword = ClassRegistry::init('HospitalSearchFreeword');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HospitalSearchFreeword);

		parent::tearDown();
	}

}
