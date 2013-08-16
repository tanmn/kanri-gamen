<?php
App::uses('MsHoliday', 'Model');

/**
 * MsHoliday Test Case
 *
 */
class MsHolidayTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ms_holiday'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MsHoliday = ClassRegistry::init('MsHoliday');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MsHoliday);

		parent::tearDown();
	}

}
