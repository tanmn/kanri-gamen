<?php
App::uses('MsDaycareCenter', 'Model');

/**
 * MsDaycareCenter Test Case
 *
 */
class MsDaycareCenterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ms_daycare_center'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MsDaycareCenter = ClassRegistry::init('MsDaycareCenter');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MsDaycareCenter);

		parent::tearDown();
	}

}
