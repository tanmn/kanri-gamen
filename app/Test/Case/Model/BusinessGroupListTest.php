<?php
App::uses('BusinessGroupList', 'Model');

/**
 * BusinessGroupList Test Case
 *
 */
class BusinessGroupListTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.business_group_list',
		'app.group',
		'app.parent_group',
		'app.leader',
		'app.sort',
		'app.office'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BusinessGroupList = ClassRegistry::init('BusinessGroupList');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BusinessGroupList);

		parent::tearDown();
	}

}
