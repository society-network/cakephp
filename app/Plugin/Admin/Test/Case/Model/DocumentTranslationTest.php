<?php
App::uses('DocumentTranslation', 'Admin.Model');

/**
 * DocumentTranslation Test Case
 *
 */
class DocumentTranslationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.admin.document_translation',
		'plugin.admin.document',
		'plugin.admin.user',
		'plugin.admin.user_group',
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
		$this->DocumentTranslation = ClassRegistry::init('Admin.DocumentTranslation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DocumentTranslation);

		parent::tearDown();
	}

}
