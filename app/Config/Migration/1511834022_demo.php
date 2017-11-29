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
			'drop_field' => array(
				'news' => array('noibat', 'indexes' => array('PRIMARY', 'fk_user_news')),
				'users' => array('indexes' => array('PRIMARY', 'id')),
			),
			'drop_table' => array(
				'i18n'
			),
		),
		'down' => array(
			'create_field' => array(
				'news' => array(
					'noibat' => array('type' => 'integer', 'null' => false, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'fk_user_news' => array('column' => 'user_id', 'unique' => 0),
					),
				),
				'users' => array(
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'id' => array('column' => 'id', 'unique' => 0),
					),
				),
			),
			'create_table' => array(
				'i18n' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
					'locale' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 6, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'model' => array('type' => 'string', 'null' => false, 'default' => null, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'news_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
					'field' => array('type' => 'string', 'null' => false, 'default' => null, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'content' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'locale' => array('column' => 'locale', 'unique' => 0),
						'model' => array('column' => 'model', 'unique' => 0),
						'row_id' => array('column' => 'news_id', 'unique' => 0),
						'field' => array('column' => 'field', 'unique' => 0),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
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
