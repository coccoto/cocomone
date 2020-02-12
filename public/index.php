<?php

ini_set('display_errors', '1');
// ini_set('display_errors', '0');

define('Root', realpath('../') . '/');

require_once Root . 'vendor/autoload.php';
// require_once Root . 'conf/database.php';
require_once Root . 'conf/map.php';

// coccoto\crud\CRUD::push($connInfo);

$namespace = 'app\\controllers\\';

$dotRouter = new coccoto\dotrouter\DotRouter();
$dotRouter->push($map, $namespace);
$dotRouter->run();