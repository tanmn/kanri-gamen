<?php
App::uses('MsStation', 'Model');

/**
 * MsStation Test Case
 *
 */
class MsStationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ms_station'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MsStation = ClassRegistry::init('MsStation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MsStation);

		parent::tearDown();
	}

}
