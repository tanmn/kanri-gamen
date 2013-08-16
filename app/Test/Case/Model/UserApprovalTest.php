<?php
App::uses('UserApproval', 'Model');

/**
 * UserApproval Test Case
 *
 */
class UserApprovalTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user_approval',
		'app.newspaper_detail',
		'app.login',
		'app.qualification',
		'app.working_style',
		'app.send_mail_request',
		'app.business'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UserApproval = ClassRegistry::init('UserApproval');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserApproval);

		parent::tearDown();
	}

}
