<?php
App::uses('MsDormitory', 'Model');

/**
 * MsDormitory Test Case
 *
 */
class MsDormitoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ms_dormitory'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MsDormitory = ClassRegistry::init('MsDormitory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MsDormitory);

		parent::tearDown();
	}

}
