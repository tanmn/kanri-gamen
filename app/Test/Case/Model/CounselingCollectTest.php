<?php
App::uses('CounselingCollect', 'Model');

/**
 * CounselingCollect Test Case
 *
 */
class CounselingCollectTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.counseling_collect',
		'app.case',
		'app.archive',
		'app.counselor'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CounselingCollect = ClassRegistry::init('CounselingCollect');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CounselingCollect);

		parent::tearDown();
	}

}
