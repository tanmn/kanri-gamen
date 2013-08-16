<?php
App::uses('RecruitingSearchKeyword', 'Model');

/**
 * RecruitingSearchKeyword Test Case
 *
 */
class RecruitingSearchKeywordTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.recruiting_search_keyword'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RecruitingSearchKeyword = ClassRegistry::init('RecruitingSearchKeyword');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RecruitingSearchKeyword);

		parent::tearDown();
	}

}
