<?php
/**
 * UploadFile Fixture
 */
class UploadFileFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'text', 'null' => false, 'length' => 11, 'key' => 'primary'),
		'file_path' => array('type' => 'text', 'null' => false),
		'file_content' => array('type' => 'binary', 'null' => false),
		'created_at' => array('type' => 'datetime', 'null' => true, 'default' => 'null'),
		'updated_at' => array('type' => 'datetime', 'null' => true, 'default' => 'null'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => true)
		),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'file_path' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'file_content' => 'Lorem ipsum dolor sit amet',
			'created_at' => '2016-07-14 14:01:42',
			'updated_at' => '2016-07-14 14:01:42'
		),
	);

}
