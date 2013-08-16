<?php
App::uses('HospitalNurseReview', 'Model');

/**
 * HospitalNurseReview Test Case
 *
 */
class HospitalNurseReviewTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hospital_nurse_review',
		'app.hospital_data'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HospitalNurseReview = ClassRegistry::init('HospitalNurseReview');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HospitalNurseReview);

		parent::tearDown();
	}

}
