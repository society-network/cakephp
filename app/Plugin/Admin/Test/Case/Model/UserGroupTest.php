<?php
App::uses('UserGroup', 'Admin.Model');

/**
 * UserGroup Test Case
 *
 */
class UserGroupTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.admin.user_group',
		'plugin.admin.user',
		'plugin.admin.document_translation',
		'plugin.admin.document',
		'plugin.admin.language',
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
		$this->UserGroup = ClassRegistry::init('Admin.UserGroup');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserGroup);

		parent::tearDown();
	}

}
