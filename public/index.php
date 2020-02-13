<?php

define('Root', realpath('../') . '/');

require_once Root . 'vendor/autoload.php';
// require_once Root . 'conf/database.php';
require_once Root . 'conf/development.php';
require_once Root . 'conf/map.php';

// coccoto\crud\CRUD::push($connInfo);

$namespace = 'app\\controllers\\';

$dotRouter = new coccoto\dotrouter\DotRouter();
$dotRouter->push($map, $namespace);
$dotRouter->run();