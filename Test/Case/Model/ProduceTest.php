<?php
App::uses('Produce', 'Model');

/**
 * Produce Test Case
 *
 */
class ProduceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.produce',
		'app.product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Produce = ClassRegistry::init('Produce');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Produce);

		parent::tearDown();
	}

}
