<?php
App::uses('DocumentFile', 'Admin.Model');

/**
 * DocumentFile Test Case
 *
 */
class DocumentFileTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.admin.document_file',
		'plugin.admin.document',
		'plugin.admin.user',
		'plugin.admin.user_group',
		'plugin.admin.document_translation',
		'plugin.admin.locale',
		'plugin.admin.category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DocumentFile = ClassRegistry::init('Admin.DocumentFile');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DocumentFile);

		parent::tearDown();
	}

}
