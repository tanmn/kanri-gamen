<?php
App::uses('HolidayForm', 'Model');

/**
 * HolidayForm Test Case
 *
 */
class HolidayFormTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.holiday_form'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HolidayForm = ClassRegistry::init('HolidayForm');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HolidayForm);

		parent::tearDown();
	}

}
