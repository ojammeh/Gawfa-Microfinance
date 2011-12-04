<?php
/* Savingtransaction Test cases generated on: 2011-12-04 14:26:11 : 1323008771*/
App::uses('Savingtransaction', 'Model');

/**
 * Savingtransaction Test Case
 *
 */
class SavingtransactionTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.savingtransaction', 'app.customer', 'app.branch');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Savingtransaction = ClassRegistry::init('Savingtransaction');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Savingtransaction);

		parent::tearDown();
	}

}
