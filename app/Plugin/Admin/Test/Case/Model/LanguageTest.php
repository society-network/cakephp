<?php
App::uses('Language', 'Admin.Model');

/**
 * Language Test Case
 *
 */
class LanguageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.admin.language',
		'plugin.admin.document_translation',
		'plugin.admin.document',
		'plugin.admin.user',
		'plugin.admin.user_group',
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
		$this->Language = ClassRegistry::init('Admin.Language');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Language);

		parent::tearDown();
	}

}
