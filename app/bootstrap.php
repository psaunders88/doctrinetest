<?php

require_once 'vendor/autoload.php';
require_once 'config.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$services = [];

$paths = array("src/Component/");
$isDevMode = false;

// the connection configuration
$dbParams = array(
    'driver'   => DB_DRIVER,
    'user'     => DB_USER,
    'password' => DB_PASSWORD,
    'dbname'   => DB_DBNAME,
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$services['em'] = EntityManager::create($dbParams, $config);

