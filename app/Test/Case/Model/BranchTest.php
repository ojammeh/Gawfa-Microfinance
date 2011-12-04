<?php
/* Branch Test cases generated on: 2011-12-03 13:56:36 : 1322920596*/
App::uses('Branch', 'Model');

/**
 * Branch Test Case
 *
 */
class BranchTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.branch');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Branch = ClassRegistry::init('Branch');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Branch);

		parent::tearDown();
	}

}
