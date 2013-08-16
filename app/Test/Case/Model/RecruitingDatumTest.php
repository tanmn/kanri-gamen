<?php
App::uses('RecruitingDatum', 'Model');

/**
 * RecruitingDatum Test Case
 *
 */
class RecruitingDatumTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.recruiting_datum',
		'app.hospital_data',
		'app.qualification',
		'app.working_style',
		'app.haizoku',
		'app.transportation_costs',
		'app.shift_system',
		'app.holiday',
		'app.car_commuting',
		'app.business',
		'app.order_rank',
		'app.proagent',
		'app.history_business',
		'app.copy',
		'app.finally_updated_business',
		'app.lp',
		'app.lp_recruiting_datum'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RecruitingDatum = ClassRegistry::init('RecruitingDatum');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RecruitingDatum);

		parent::tearDown();
	}

}
