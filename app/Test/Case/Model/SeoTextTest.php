<?php
App::uses('SeoText', 'Model');

/**
 * SeoText Test Case
 *
 */
class SeoTextTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.seo_text'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SeoText = ClassRegistry::init('SeoText');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SeoText);

		parent::tearDown();
	}

}
