<?php

namespace OCA\Expo\Controller;

use OCA\Expo\Db\Item;
use OCA\Expo\Db\ItemMapper;
use OCP\AppFramework\Controller;
use OCP\AppFramework\Http\DataResponse;
use OCP\IRequest;

class ApiController extends Controller {

	/** @var ItemMapper mapper for item entity */
	protected $itemMapper;
	/** @var string user ID */
	protected $userId;

	/**
	 * constructor of the controller
	 * @param string $appName the name of the app
	 * @param IRequest $request an instance of the request
	 * @param ItemMapper $itemMapper mapper for item entity
	 * @param string $userId user id
	 */
	function __construct($appName,
								IRequest $request,
								ItemMapper $itemMapper,
								$userId) {
		parent::__construct($appName, $request);
		$this->itemMapper = $itemMapper;
		$this->userId = $userId;
	}

	/**
	 * @NoAdminRequired
	 */
	function get() {
		$items = [
			['id' => 1, 'title' => 'Entry number 1', 'text' => 'This is a very basic text.'],
			['id' => 2, 'title' => 'The second entry', 'text' => 'Here is already a bit more text listed.'],
			['id' => 3, 'title' => 'The last of the first three', 'text' => 'The last post is always the best one ;).'],
		];
		return new DataResponse($items);
	}

	/**
	 * @NoAdminRequired
	 *
	 * @param string $title the title of the item
	 * @param string $text the text of the item
	 * @return DataResponse
	 */
	function post($title, $text) {
		$item = new Item();
		$item->setTitle($title);
		$item->setText($text);
		$item->setUserId($this->userId);

		$item = $this->itemMapper->insert($item);
		return new DataResponse($item->toArray());
	}
}