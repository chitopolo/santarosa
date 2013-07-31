<?php
App::uses('Quote', 'Model');

/**
 * Quote Test Case
 *
 */
class QuoteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.quote',
		'app.item',
		'app.category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Quote = ClassRegistry::init('Quote');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Quote);

		parent::tearDown();
	}

}
