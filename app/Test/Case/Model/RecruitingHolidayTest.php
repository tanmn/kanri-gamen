<?php
App::uses('RecruitingHoliday', 'Model');

/**
 * RecruitingHoliday Test Case
 *
 */
class RecruitingHolidayTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.recruiting_holiday',
		'app.hospital_data',
		'app.recruiting_data'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RecruitingHoliday = ClassRegistry::init('RecruitingHoliday');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RecruitingHoliday);

		parent::tearDown();
	}

}
