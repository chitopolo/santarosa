<?php
App::uses('ImagesItem', 'Model');

/**
 * ImagesItem Test Case
 *
 */
class ImagesItemTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.images_item',
		'app.item'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ImagesItem = ClassRegistry::init('ImagesItem');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ImagesItem);

		parent::tearDown();
	}

}
