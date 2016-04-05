<?php

namespace OCA\Expo\Controller;

use OCP\AppFramework\Controller;
use OCP\AppFramework\Http\DataResponse;

class PageController extends Controller {

	/**
	 * @NoAdminRequired
	 * @NoCSRFRequired
	 */
	function index() {
		return new DataResponse(['data' => 'example']);
	}
}