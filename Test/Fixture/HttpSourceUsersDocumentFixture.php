<?php

/**
 * UsersDocumentFixture
 */
class HttpSourceUsersDocumentFixture extends CakeTestFixture {

	public $useDbConfig = 'test';
	
	public $table = 'users_documents';

	/**
	 * Fields
	 *
	 * @var array
	 */
	public $fields = array(
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 20),
		'document_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 20),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

	/**
	 * Records
	 *
	 * @var array
	 */
	public $records = array(
		array('user_id' => 1, 'document_id' => 1),
		array('user_id' => 2, 'document_id' => 1),
		array('user_id' => 2, 'document_id' => 2)
	);

}
