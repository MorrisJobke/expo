<?php

namespace OCA\Expo\Controller;

use OCP\AppFramework\Controller;
use OCP\AppFramework\Http\DataResponse;

class ApiController extends Controller {

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
}