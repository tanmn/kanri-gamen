<?php
App::uses('HospitalDataController', 'Controller');

/**
 * HospitalDataController Test Case
 *
 */
class HospitalDataControllerTest extends ControllerTestCase {

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

}
