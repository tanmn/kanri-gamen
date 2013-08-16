<?php
App::uses('MsLeaveChildbirth', 'Model');

/**
 * MsLeaveChildbirth Test Case
 *
 */
class MsLeaveChildbirthTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ms_leave_childbirth'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MsLeaveChildbirth = ClassRegistry::init('MsLeaveChildbirth');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MsLeaveChildbirth);

		parent::tearDown();
	}

}
