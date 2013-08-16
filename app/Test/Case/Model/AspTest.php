<?php
App::uses('Asp', 'Model');

/**
 * Asp Test Case
 *
 */
class AspTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.asp',
		'app.media',
		'app.af_asp',
		'app.f_asp_id',
		'app.ms_af_asp_id',
		'app.f_asp_kind',
		'app.ms_af_asp_kind'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Asp = ClassRegistry::init('Asp');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Asp);

		parent::tearDown();
	}

}
