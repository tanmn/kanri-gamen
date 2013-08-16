<?php
App::uses('Introduction', 'Model');

/**
 * Introduction Test Case
 *
 */
class IntroductionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.introduction',
		'app.entry',
		'app.user',
		'app.recruiting_data',
		'app.hospital_data',
		'app.af_asp',
		'app.access',
		'app.access_info',
		'app.transition',
		'app.session',
		'app.ga_datum',
		'app.entry_ga_datum',
		'app.js',
		'app.business',
		'app.business_introduction'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Introduction = ClassRegistry::init('Introduction');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Introduction);

		parent::tearDown();
	}

}
