<?php
class Demo extends CakeMigration 
{

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
		$News = ClassRegistry::init('News');
        if ($direction === 'up') {
            for ($i = 1; $i <= 500; $i++) {
                $row = array();
                $row['News']['title'] = 'The Best Tests for WordPress';
                $row['News']['content'] = 'If you have a plugin or widget that lists popular posts or comments, make sure that this sticky post is not always at the top of those lists unless it really is popular.';
                $News->create();
                $News->save($row);
			}
		}
		elseif ($direction === 'down') {
		}
		
		return true;
	}
}