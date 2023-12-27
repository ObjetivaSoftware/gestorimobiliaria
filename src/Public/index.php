<?php

namespace App\Public;

use App\Router;

$pathVendorAutoload = __DIR__ . '/../../vendor/autoload.php';

if (!file_exists($pathVendorAutoload)) {
    die('Please run "composer install" in root directory');
}
require_once __DIR__ . '/../../src/loader.php';

require_once $pathVendorAutoload;

$router = new Router(
    __SERVER: $_SERVER
);