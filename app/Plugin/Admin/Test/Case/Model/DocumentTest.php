<?php
App::uses('Document', 'Admin.Model');

/**
 * Document Test Case
 *
 */
class DocumentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.admin.document',
		'plugin.admin.user',
		'plugin.admin.user_group',
		'plugin.admin.document_translation',
		'plugin.admin.language',
		'plugin.admin.document_file',
		'plugin.admin.category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Document = ClassRegistry::init('Admin.Document');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Document);

		parent::tearDown();
	}

}
