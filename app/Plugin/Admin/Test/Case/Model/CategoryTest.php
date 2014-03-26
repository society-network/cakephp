<?php
App::uses('Category', 'Admin.Model');

/**
 * Category Test Case
 *
 */
class CategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.admin.category',
		'plugin.admin.document',
		'plugin.admin.user',
		'plugin.admin.user_group',
		'plugin.admin.document_translation',
		'plugin.admin.language',
		'plugin.admin.document_file'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Category = ClassRegistry::init('Admin.Category');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Category);

		parent::tearDown();
	}

}
