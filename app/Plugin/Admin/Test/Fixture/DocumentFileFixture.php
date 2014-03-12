<?php
/**
 * DocumentFileFixture
 *
 */
class DocumentFileFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'document_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'document_translation_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'type' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'path' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'is_a_link' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'is_login_required' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'created' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'modified' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'deleted' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'document_id' => 1,
			'document_translation_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'type' => 'Lorem ipsum dolor sit amet',
			'path' => 'Lorem ipsum dolor sit amet',
			'is_a_link' => 1,
			'is_login_required' => 1,
			'created' => 1394658790,
			'modified' => 1394658790,
			'deleted' => 1394658790
		),
		array(
			'id' => 2,
			'document_id' => 2,
			'document_translation_id' => 2,
			'name' => 'Lorem ipsum dolor sit amet',
			'type' => 'Lorem ipsum dolor sit amet',
			'path' => 'Lorem ipsum dolor sit amet',
			'is_a_link' => 1,
			'is_login_required' => 1,
			'created' => 1394658790,
			'modified' => 1394658790,
			'deleted' => 1394658790
		),
		array(
			'id' => 3,
			'document_id' => 3,
			'document_translation_id' => 3,
			'name' => 'Lorem ipsum dolor sit amet',
			'type' => 'Lorem ipsum dolor sit amet',
			'path' => 'Lorem ipsum dolor sit amet',
			'is_a_link' => 1,
			'is_login_required' => 1,
			'created' => 1394658790,
			'modified' => 1394658790,
			'deleted' => 1394658790
		),
		array(
			'id' => 4,
			'document_id' => 4,
			'document_translation_id' => 4,
			'name' => 'Lorem ipsum dolor sit amet',
			'type' => 'Lorem ipsum dolor sit amet',
			'path' => 'Lorem ipsum dolor sit amet',
			'is_a_link' => 1,
			'is_login_required' => 1,
			'created' => 1394658790,
			'modified' => 1394658790,
			'deleted' => 1394658790
		),
		array(
			'id' => 5,
			'document_id' => 5,
			'document_translation_id' => 5,
			'name' => 'Lorem ipsum dolor sit amet',
			'type' => 'Lorem ipsum dolor sit amet',
			'path' => 'Lorem ipsum dolor sit amet',
			'is_a_link' => 1,
			'is_login_required' => 1,
			'created' => 1394658790,
			'modified' => 1394658790,
			'deleted' => 1394658790
		),
		array(
			'id' => 6,
			'document_id' => 6,
			'document_translation_id' => 6,
			'name' => 'Lorem ipsum dolor sit amet',
			'type' => 'Lorem ipsum dolor sit amet',
			'path' => 'Lorem ipsum dolor sit amet',
			'is_a_link' => 1,
			'is_login_required' => 1,
			'created' => 1394658790,
			'modified' => 1394658790,
			'deleted' => 1394658790
		),
		array(
			'id' => 7,
			'document_id' => 7,
			'document_translation_id' => 7,
			'name' => 'Lorem ipsum dolor sit amet',
			'type' => 'Lorem ipsum dolor sit amet',
			'path' => 'Lorem ipsum dolor sit amet',
			'is_a_link' => 1,
			'is_login_required' => 1,
			'created' => 1394658790,
			'modified' => 1394658790,
			'deleted' => 1394658790
		),
		array(
			'id' => 8,
			'document_id' => 8,
			'document_translation_id' => 8,
			'name' => 'Lorem ipsum dolor sit amet',
			'type' => 'Lorem ipsum dolor sit amet',
			'path' => 'Lorem ipsum dolor sit amet',
			'is_a_link' => 1,
			'is_login_required' => 1,
			'created' => 1394658790,
			'modified' => 1394658790,
			'deleted' => 1394658790
		),
		array(
			'id' => 9,
			'document_id' => 9,
			'document_translation_id' => 9,
			'name' => 'Lorem ipsum dolor sit amet',
			'type' => 'Lorem ipsum dolor sit amet',
			'path' => 'Lorem ipsum dolor sit amet',
			'is_a_link' => 1,
			'is_login_required' => 1,
			'created' => 1394658790,
			'modified' => 1394658790,
			'deleted' => 1394658790
		),
		array(
			'id' => 10,
			'document_id' => 10,
			'document_translation_id' => 10,
			'name' => 'Lorem ipsum dolor sit amet',
			'type' => 'Lorem ipsum dolor sit amet',
			'path' => 'Lorem ipsum dolor sit amet',
			'is_a_link' => 1,
			'is_login_required' => 1,
			'created' => 1394658790,
			'modified' => 1394658790,
			'deleted' => 1394658790
		),
	);

}
