<?php
App::uses('ImagesProduce', 'Model');

/**
 * ImagesProduce Test Case
 *
 */
class ImagesProduceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.images_produce',
		'app.product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ImagesProduce = ClassRegistry::init('ImagesProduce');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ImagesProduce);

		parent::tearDown();
	}

}
