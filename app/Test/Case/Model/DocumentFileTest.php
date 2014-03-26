<?php
App::uses('DocumentFile', 'Model');

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
		'app.document_file',
		'app.document',
		'app.user',
		'app.user_group',
		'app.document_translation',
		'app.language',
		'app.category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DocumentFile = ClassRegistry::init('DocumentFile');
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
