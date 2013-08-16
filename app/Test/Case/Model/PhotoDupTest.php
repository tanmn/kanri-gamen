<?php
App::uses('PhotoDup', 'Model');

/**
 * PhotoDup Test Case
 *
 */
class PhotoDupTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.photo_dup',
		'app.target',
		'app.hospital',
		'app.hospital_photo_dup'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PhotoDup = ClassRegistry::init('PhotoDup');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PhotoDup);

		parent::tearDown();
	}

}
