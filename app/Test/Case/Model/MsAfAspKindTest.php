<?php
App::uses('MsAfAspKind', 'Model');

/**
 * MsAfAspKind Test Case
 *
 */
class MsAfAspKindTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ms_af_asp_kind'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MsAfAspKind = ClassRegistry::init('MsAfAspKind');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MsAfAspKind);

		parent::tearDown();
	}

}
