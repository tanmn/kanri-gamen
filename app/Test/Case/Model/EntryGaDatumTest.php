<?php
App::uses('EntryGaDatum', 'Model');

/**
 * EntryGaDatum Test Case
 *
 */
class EntryGaDatumTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.entry_ga_datum',
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
		'app.ga_datum'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EntryGaDatum = ClassRegistry::init('EntryGaDatum');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EntryGaDatum);

		parent::tearDown();
	}

}
