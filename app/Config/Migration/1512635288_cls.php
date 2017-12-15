<?php
class Cls extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = 'cls';

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
		),
		'down' => array(
			'drop_field' => array(
				'news' => array('adsfsdfas', 'fsdgsdfg'),
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
