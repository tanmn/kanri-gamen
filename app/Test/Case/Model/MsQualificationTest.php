<?php
App::uses('MsQualification', 'Model');

/**
 * MsQualification Test Case
 *
 */
class MsQualificationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ms_qualification'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MsQualification = ClassRegistry::init('MsQualification');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MsQualification);

		parent::tearDown();
	}

}
