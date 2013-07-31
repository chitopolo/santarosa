<?php
App::uses('ImagesRecipe', 'Model');

/**
 * ImagesRecipe Test Case
 *
 */
class ImagesRecipeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.images_recipe',
		'app.recipe'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ImagesRecipe = ClassRegistry::init('ImagesRecipe');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ImagesRecipe);

		parent::tearDown();
	}

}
