<?php
App::uses('Requirement', 'Model');

/**
 * Requirement Test Case
 *
 */
class RequirementTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.requirement',
		'app.branch',
		'app.company',
		'app.address'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Requirement = ClassRegistry::init('Requirement');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Requirement);

		parent::tearDown();
	}

}
