<?php
declare(strict_types=1);
// SPDX-FileCopyrightText: Robin Rademacher <mail@ruberith.dev>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\ServicePlanner\AppInfo;

use OCP\AppFramework\App;

class Application extends App {
	public const APP_ID = 'serviceplanner';

	public function __construct() {
		parent::__construct(self::APP_ID);
	}
}
