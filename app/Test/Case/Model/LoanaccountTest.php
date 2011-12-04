<?php
/* Loanaccount Test cases generated on: 2011-12-04 11:53:46 : 1322999626*/
App::uses('Loanaccount', 'Model');

/**
 * Loanaccount Test Case
 *
 */
class LoanaccountTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.loanaccount');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Loanaccount = ClassRegistry::init('Loanaccount');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Loanaccount);

		parent::tearDown();
	}

}
