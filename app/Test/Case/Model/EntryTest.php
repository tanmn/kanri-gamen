<?php
App::uses('Entry', 'Model');

/**
 * Entry Test Case
 *
 */
class EntryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.entry',
		'app.user',
		'app.recruiting_data',
		'app.hospital_data',
		'app.af_asp',
		'app.access',
		'app.access_info',
		'app.transition',
		'app.session',
		'app.introduction',
		'app.ga_datum',
		'app.entry_ga_datum'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Entry = ClassRegistry::init('Entry');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Entry);

		parent::tearDown();
	}

}
