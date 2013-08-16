<?php
App::uses('MsPrefecture', 'Model');

/**
 * MsPrefecture Test Case
 *
 */
class MsPrefectureTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ms_prefecture'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MsPrefecture = ClassRegistry::init('MsPrefecture');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MsPrefecture);

		parent::tearDown();
	}

}
