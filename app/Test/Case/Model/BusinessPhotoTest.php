<?php
App::uses('BusinessPhoto', 'Model');

/**
 * BusinessPhoto Test Case
 *
 */
class BusinessPhotoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.business_photo',
		'app.business_data',
		'app.photo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BusinessPhoto = ClassRegistry::init('BusinessPhoto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BusinessPhoto);

		parent::tearDown();
	}

}
