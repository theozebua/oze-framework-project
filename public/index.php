<?php

declare(strict_types=1);

use OzeFramework\App\Contracts\App;

require __DIR__ . '/../vendor/autoload.php';

/** @var App $app */
$app = require __DIR__ . '/../bootstrap/app.php';

$app->run();
