<?php
App::uses('MsCounselingCategory', 'Model');

/**
 * MsCounselingCategory Test Case
 *
 */
class MsCounselingCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ms_counseling_category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MsCounselingCategory = ClassRegistry::init('MsCounselingCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MsCounselingCategory);

		parent::tearDown();
	}

}
