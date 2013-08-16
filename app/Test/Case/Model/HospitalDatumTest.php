<?php
App::uses('HospitalDatum', 'Model');

/**
 * HospitalDatum Test Case
 *
 */
class HospitalDatumTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hospital_datum',
		'app.facility_form',
		'app.business',
		'app.proagent',
		'app.history_business',
		'app.media',
		'app.rw',
		'app.ms_treatment_subject',
		'app.hospital_data_ms_treatment_subject'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HospitalDatum = ClassRegistry::init('HospitalDatum');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HospitalDatum);

		parent::tearDown();
	}

}
