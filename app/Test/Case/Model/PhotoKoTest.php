<?php
App::uses('PhotoKo', 'Model');

/**
 * PhotoKo Test Case
 *
 */
class PhotoKoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.photo_ko',
		'app.target'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PhotoKo = ClassRegistry::init('PhotoKo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PhotoKo);

		parent::tearDown();
	}

}
