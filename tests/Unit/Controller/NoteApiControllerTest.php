<?php
declare(strict_types=1);
// SPDX-FileCopyrightText: Robin Rademacher <mail@ruberith.dev>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\ServicePlanner\Tests\Unit\Controller;

use OCA\ServicePlanner\Controller\NoteApiController;

class NoteApiControllerTest extends NoteControllerTest {
	public function setUp(): void {
		parent::setUp();
		$this->controller = new NoteApiController($this->request, $this->service, $this->userId);
	}
}
