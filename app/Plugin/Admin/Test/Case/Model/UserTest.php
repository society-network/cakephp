<?php
App::uses('User', 'Admin.Model');

/**
 * User Test Case
 *
 */
class UserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.admin.user',
		'plugin.admin.user_group',
		'plugin.admin.document_translation',
		'plugin.admin.document',
		'plugin.admin.locale',
		'plugin.admin.category',
		'plugin.admin.document_file'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->User = ClassRegistry::init('Admin.User');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->User);

		parent::tearDown();
	}

}
