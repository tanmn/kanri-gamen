<?php
App::uses('HospitalDataMsTreatmentSubject', 'Model');

/**
 * HospitalDataMsTreatmentSubject Test Case
 *
 */
class HospitalDataMsTreatmentSubjectTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hospital_data_ms_treatment_subject',
		'app.hospital_data',
		'app.treatment_subject'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HospitalDataMsTreatmentSubject = ClassRegistry::init('HospitalDataMsTreatmentSubject');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HospitalDataMsTreatmentSubject);

		parent::tearDown();
	}

}
