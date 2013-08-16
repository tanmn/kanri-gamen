<?php
App::uses('MsZipCode', 'Model');

/**
 * MsZipCode Test Case
 *
 */
class MsZipCodeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ms_zip_code'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MsZipCode = ClassRegistry::init('MsZipCode');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MsZipCode);

		parent::tearDown();
	}

}
