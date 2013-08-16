<?php
App::uses('BusinessIntroduction', 'Model');

/**
 * BusinessIntroduction Test Case
 *
 */
class BusinessIntroductionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.business_introduction',
		'app.business'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BusinessIntroduction = ClassRegistry::init('BusinessIntroduction');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BusinessIntroduction);

		parent::tearDown();
	}

}
