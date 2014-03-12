<?php
App::uses('Locale', 'Admin.Model');

/**
 * Locale Test Case
 *
 */
class LocaleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.admin.locale',
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
		$this->Locale = ClassRegistry::init('Admin.Locale');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Locale);

		parent::tearDown();
	}

}
