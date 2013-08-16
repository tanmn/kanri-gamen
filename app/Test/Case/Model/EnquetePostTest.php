<?php
App::uses('EnquetePost', 'Model');

/**
 * EnquetePost Test Case
 *
 */
class EnquetePostTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.enquete_post',
		'app.enquete',
		'app.user',
		'app.sub',
		'app.enquete_answer',
		'app.enquete_question'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EnquetePost = ClassRegistry::init('EnquetePost');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EnquetePost);

		parent::tearDown();
	}

}
