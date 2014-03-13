<?php
/**
 * UserGroupFixture
 *
 */
class UserGroupFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'parent_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'parent_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => 1394688186,
			'modified' => 1394688186,
			'deleted' => 1394688186
		),
		array(
			'id' => 2,
			'parent_id' => 2,
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => 1394688186,
			'modified' => 1394688186,
			'deleted' => 1394688186
		),
		array(
			'id' => 3,
			'parent_id' => 3,
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => 1394688186,
			'modified' => 1394688186,
			'deleted' => 1394688186
		),
		array(
			'id' => 4,
			'parent_id' => 4,
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => 1394688186,
			'modified' => 1394688186,
			'deleted' => 1394688186
		),
		array(
			'id' => 5,
			'parent_id' => 5,
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => 1394688186,
			'modified' => 1394688186,
			'deleted' => 1394688186
		),
		array(
			'id' => 6,
			'parent_id' => 6,
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => 1394688186,
			'modified' => 1394688186,
			'deleted' => 1394688186
		),
		array(
			'id' => 7,
			'parent_id' => 7,
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => 1394688186,
			'modified' => 1394688186,
			'deleted' => 1394688186
		),
		array(
			'id' => 8,
			'parent_id' => 8,
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => 1394688186,
			'modified' => 1394688186,
			'deleted' => 1394688186
		),
		array(
			'id' => 9,
			'parent_id' => 9,
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => 1394688186,
			'modified' => 1394688186,
			'deleted' => 1394688186
		),
		array(
			'id' => 10,
			'parent_id' => 10,
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => 1394688186,
			'modified' => 1394688186,
			'deleted' => 1394688186
		),
	);

}
