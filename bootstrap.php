<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require 'vendor/autoload.php';
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src/models"), $isDevMode);
$conn = array(
    'dbname' => 'clearcode',
    'user' => 'clearcode',
    'password' => 'QYgqLextHW',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
);
$entityManager = EntityManager::create($conn, $config);
