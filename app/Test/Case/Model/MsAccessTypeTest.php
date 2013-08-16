<?php
App::uses('MsAccessType', 'Model');

/**
 * MsAccessType Test Case
 *
 */
class MsAccessTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ms_access_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MsAccessType = ClassRegistry::init('MsAccessType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MsAccessType);

		parent::tearDown();
	}

}
