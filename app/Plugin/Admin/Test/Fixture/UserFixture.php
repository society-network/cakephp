<?php
/**
 * UserFixture
 *
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'user_group_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'key' => 'unique', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'password' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'modified' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'deleted' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'email_UNIQUE' => array('column' => 'name', 'unique' => 1)
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
			'user_group_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'created' => 1394658790,
			'modified' => 1394658790,
			'deleted' => 1394658790
		),
		array(
			'id' => 2,
			'user_group_id' => 2,
			'name' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'created' => 1394658790,
			'modified' => 1394658790,
			'deleted' => 1394658790
		),
		array(
			'id' => 3,
			'user_group_id' => 3,
			'name' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'created' => 1394658790,
			'modified' => 1394658790,
			'deleted' => 1394658790
		),
		array(
			'id' => 4,
			'user_group_id' => 4,
			'name' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'created' => 1394658790,
			'modified' => 1394658790,
			'deleted' => 1394658790
		),
		array(
			'id' => 5,
			'user_group_id' => 5,
			'name' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'created' => 1394658790,
			'modified' => 1394658790,
			'deleted' => 1394658790
		),
		array(
			'id' => 6,
			'user_group_id' => 6,
			'name' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'created' => 1394658790,
			'modified' => 1394658790,
			'deleted' => 1394658790
		),
		array(
			'id' => 7,
			'user_group_id' => 7,
			'name' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'created' => 1394658790,
			'modified' => 1394658790,
			'deleted' => 1394658790
		),
		array(
			'id' => 8,
			'user_group_id' => 8,
			'name' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'created' => 1394658790,
			'modified' => 1394658790,
			'deleted' => 1394658790
		),
		array(
			'id' => 9,
			'user_group_id' => 9,
			'name' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'created' => 1394658790,
			'modified' => 1394658790,
			'deleted' => 1394658790
		),
		array(
			'id' => 10,
			'user_group_id' => 10,
			'name' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'created' => 1394658790,
			'modified' => 1394658790,
			'deleted' => 1394658790
		),
	);

}
