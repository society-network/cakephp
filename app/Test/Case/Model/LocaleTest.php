<?php
App::uses('Locale', 'Model');

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
		'app.locale',
		'app.document_translation',
		'app.document',
		'app.user',
		'app.user_group',
		'app.category',
		'app.document_file'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Locale = ClassRegistry::init('Locale');
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
