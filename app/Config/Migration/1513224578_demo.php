<?php
class Demo extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = 'demo';

/**
 * Actions to be performed
 *
 * @var array $migration
 */
	public $migration = array(
		'up' => array(
			'create_field' => array(
				'news' => array(
					'adsfsdfas' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 24, 'collate' => 'utf8_general_ci', 'charset' => 'utf8', 'after' => 'update_at'),
					'fsdgsdfg' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8', 'after' => 'adsfsdfas'),
				),
			),
			'alter_field' => array(
				'users' => array(
					'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
					'facebook_id' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 11),
				),
			),
		),
		'down' => array(
			'drop_field' => array(
				'news' => array('adsfsdfas', 'fsdgsdfg'),
			),
			
			'alter_field' => array(
				'users' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
					'facebook_id' => array('type' => 'integer', 'null' => true, 'default' => null),
				),
			),
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction Direction of migration process (up or down)
 * @return bool Should process continue
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction Direction of migration process (up or down)
 * @return bool Should process continue
 */
	public function after($direction) {
		return true;
	}
}
