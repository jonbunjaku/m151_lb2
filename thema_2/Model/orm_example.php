<?php

namespace App\Model;

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

require_once __DIR__ . '/../config/vendor/autoload.php';

// Host must be changed because IP changes after every restart of instance in AWS
$params = [
    'host' => '44.211.235.166',
    'user' => 'admin',
    'password' => 'password.123',
    'dbname' => 'm151',
    'driver' => 'pdo_mysql',
];

$paths = [__DIR__];
$isDevMode = false;

$config = ORMSetup::createAttributeMetadataConfiguration($paths, $isDevMode);
$connection = DriverManager::getConnection($params, $config);
$entityManager = new EntityManager($connection, $config);
$entityManager->find('User', 1);