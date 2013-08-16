<?php
App::uses('HospitalReview', 'Model');

/**
 * HospitalReview Test Case
 *
 */
class HospitalReviewTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hospital_review',
		'app.hospital'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HospitalReview = ClassRegistry::init('HospitalReview');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HospitalReview);

		parent::tearDown();
	}

}
