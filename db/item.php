<?php

namespace OCA\Expo\Db;

use OCP\AppFramework\Db\Entity;

/**
 * Class Item
 *
 * @package OCA\Expo\Db
 * @method string getTitle()
 * @method void setTitle(string $value)
 * @method string getText()
 * @method void setText(string $value)
 * @method string getUserId()
 * @method void setUserId(string $value)
 */
class Item extends Entity {
	protected $title;
	protected $text;
	protected $userId;
}
