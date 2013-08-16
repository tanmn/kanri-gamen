<?php
App::uses('RecruitingBenefit', 'Model');

/**
 * RecruitingBenefit Test Case
 *
 */
class RecruitingBenefitTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.recruiting_benefit',
		'app.hospital_data',
		'app.recruiting_data'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RecruitingBenefit = ClassRegistry::init('RecruitingBenefit');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RecruitingBenefit);

		parent::tearDown();
	}

}
