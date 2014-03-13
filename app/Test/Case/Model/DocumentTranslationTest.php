<?php
App::uses('DocumentTranslation', 'Model');

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
		'app.document_translation',
		'app.document',
		'app.locale',
		'app.user',
		'app.document_file'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DocumentTranslation = ClassRegistry::init('DocumentTranslation');
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
