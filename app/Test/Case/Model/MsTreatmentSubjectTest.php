<?php
App::uses('MsTreatmentSubject', 'Model');

/**
 * MsTreatmentSubject Test Case
 *
 */
class MsTreatmentSubjectTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ms_treatment_subject',
		'app.hospital_datum',
		'app.facility_form',
		'app.business',
		'app.proagent',
		'app.history_business',
		'app.media',
		'app.rw',
		'app.hospital_data_ms_treatment_subject'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MsTreatmentSubject = ClassRegistry::init('MsTreatmentSubject');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MsTreatmentSubject);

		parent::tearDown();
	}

}
