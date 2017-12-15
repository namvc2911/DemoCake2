<?php
class Dasfasd extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = 'dasfasd';

/**
 * Actions to be performed
 *
 * @var array $migration
 */
	public $migration = array(
		'up' => array(
			'create_field' => array(
				'news' => array(
					'hello' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8', 'after' => 'adsfsdfas'),
				),
			),
			'drop_field' => array(
				'news' => array('dsafasdfas'),
			),
		),
		'down' => array(
			'drop_field' => array(
				'news' => array('hello'),
			),
			'create_field' => array(
				'news' => array(
					'dsafasdfas' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 444, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
