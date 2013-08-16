<?php
App::uses('ReviewerName', 'Model');

/**
 * ReviewerName Test Case
 *
 */
class ReviewerNameTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.reviewer_name'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ReviewerName = ClassRegistry::init('ReviewerName');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ReviewerName);

		parent::tearDown();
	}

}
