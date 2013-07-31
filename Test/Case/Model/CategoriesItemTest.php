<?php
App::uses('CategoriesItem', 'Model');

/**
 * CategoriesItem Test Case
 *
 */
class CategoriesItemTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.categories_item'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CategoriesItem = ClassRegistry::init('CategoriesItem');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CategoriesItem);

		parent::tearDown();
	}

}
