<?php
App::uses('MsZipcd', 'Model');

/**
 * MsZipcd Test Case
 *
 */
class MsZipcdTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ms_zipcd'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MsZipcd = ClassRegistry::init('MsZipcd');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MsZipcd);

		parent::tearDown();
	}

}
