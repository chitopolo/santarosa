<?php
App::uses('Supermarket', 'Model');

/**
 * Supermarket Test Case
 *
 */
class SupermarketTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.supermarket'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Supermarket = ClassRegistry::init('Supermarket');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Supermarket);

		parent::tearDown();
	}

}
