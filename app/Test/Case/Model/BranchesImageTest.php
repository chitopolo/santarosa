<?php
App::uses('BranchesImage', 'Model');

/**
 * BranchesImage Test Case
 *
 */
class BranchesImageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.branches_image',
		'app.branch',
		'app.company',
		'app.address',
		'app.requirement'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BranchesImage = ClassRegistry::init('BranchesImage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BranchesImage);

		parent::tearDown();
	}

}
