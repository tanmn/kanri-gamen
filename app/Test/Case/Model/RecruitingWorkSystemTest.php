<?php
App::uses('RecruitingWorkSystem', 'Model');

/**
 * RecruitingWorkSystem Test Case
 *
 */
class RecruitingWorkSystemTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.recruiting_work_system',
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
		$this->RecruitingWorkSystem = ClassRegistry::init('RecruitingWorkSystem');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RecruitingWorkSystem);

		parent::tearDown();
	}

}
