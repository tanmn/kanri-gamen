<?php
App::uses('FeatureText', 'Model');

/**
 * FeatureText Test Case
 *
 */
class FeatureTextTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.feature_text'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FeatureText = ClassRegistry::init('FeatureText');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FeatureText);

		parent::tearDown();
	}

}
