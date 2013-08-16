<?php
App::uses('LpRecruitingDatum', 'Model');

/**
 * LpRecruitingDatum Test Case
 *
 */
class LpRecruitingDatumTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.lp_recruiting_datum',
		'app.recruiting_data',
		'app.facility_form'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->LpRecruitingDatum = ClassRegistry::init('LpRecruitingDatum');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LpRecruitingDatum);

		parent::tearDown();
	}

}
