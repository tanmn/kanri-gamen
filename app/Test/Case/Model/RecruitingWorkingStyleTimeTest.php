<?php
App::uses('RecruitingWorkingStyleTime', 'Model');

/**
 * RecruitingWorkingStyleTime Test Case
 *
 */
class RecruitingWorkingStyleTimeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.recruiting_working_style_time',
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
		$this->RecruitingWorkingStyleTime = ClassRegistry::init('RecruitingWorkingStyleTime');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RecruitingWorkingStyleTime);

		parent::tearDown();
	}

}
