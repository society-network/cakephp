<?php
App::uses('DynamicRoute', 'Admin.Model');

/**
 * DynamicRoute Test Case
 *
 */
class DynamicRouteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.admin.dynamic_route'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DynamicRoute = ClassRegistry::init('Admin.DynamicRoute');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DynamicRoute);

		parent::tearDown();
	}

}
