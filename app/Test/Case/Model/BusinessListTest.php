<?php
App::uses('BusinessList', 'Model');

/**
 * BusinessList Test Case
 *
 */
class BusinessListTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.business_list',
		'app.login',
		'app.sort',
		'app.group'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BusinessList = ClassRegistry::init('BusinessList');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BusinessList);

		parent::tearDown();
	}

}
