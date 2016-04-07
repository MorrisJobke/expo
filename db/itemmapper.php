<?php

namespace OCA\Expo\Db;

use OCP\AppFramework\Db\Mapper;
use OCP\IDBConnection;

/**
 * Class ItemMapper
 *
 * @package OCA\Expo\Db
 * @method Item insert(Item $entity)
 */
class ItemMapper extends Mapper {
	public function __construct(IDBConnection $db) {
		parent::__construct($db, 'expo_items');
	}
}
