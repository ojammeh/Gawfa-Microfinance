<?php
/* Customer Test cases generated on: 2011-12-03 16:26:06 : 1322929566*/
App::uses('Customer', 'Model');

/**
 * Customer Test Case
 *
 */
class CustomerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.customer');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Customer = ClassRegistry::init('Customer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Customer);

		parent::tearDown();
	}

}
