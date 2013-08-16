<?php
App::uses('EnqueteAnswer', 'Model');

/**
 * EnqueteAnswer Test Case
 *
 */
class EnqueteAnswerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.enquete_answer',
		'app.enquete_post',
		'app.enquete_question'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EnqueteAnswer = ClassRegistry::init('EnqueteAnswer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EnqueteAnswer);

		parent::tearDown();
	}

}
