<?php
App::uses('RecruitingSearchFreeword', 'Model');

/**
 * RecruitingSearchFreeword Test Case
 *
 */
class RecruitingSearchFreewordTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.recruiting_search_freeword'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RecruitingSearchFreeword = ClassRegistry::init('RecruitingSearchFreeword');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RecruitingSearchFreeword);

		parent::tearDown();
	}

}
