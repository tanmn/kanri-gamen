<?php
App::uses('MsAfAspId', 'Model');

/**
 * MsAfAspId Test Case
 *
 */
class MsAfAspIdTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ms_af_asp_id',
		'app.media',
		'app.af_asp'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MsAfAspId = ClassRegistry::init('MsAfAspId');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MsAfAspId);

		parent::tearDown();
	}

}
