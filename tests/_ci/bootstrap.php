<?php

use Niden\Bootstrap\Tests;

require_once __DIR__ . '/../../config/autoload.php';

$bootstrap = new Tests();
$bootstrap->setup();

return $bootstrap->run();
