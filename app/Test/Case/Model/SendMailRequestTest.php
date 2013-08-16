<?php
App::uses('SendMailRequest', 'Model');

/**
 * SendMailRequest Test Case
 *
 */
class SendMailRequestTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.send_mail_request',
		'app.user_approval'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SendMailRequest = ClassRegistry::init('SendMailRequest');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SendMailRequest);

		parent::tearDown();
	}

}
