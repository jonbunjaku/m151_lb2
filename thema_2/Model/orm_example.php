<?php

namespace App\Model;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

// Host must be changed because IP changes after every restart of instance in AWS
$params = [
    'host' => '44.200.146.130',
    'user' => 'admin',
    'password' => 'password.123',
    'dbname' => 'm151',
    'driver' => 'pdo_mysql'
];

$paths = [
    'Grade.php',
    'User.php'
];

$config = Setup::createAttributeMetadataConfiguration($paths);
$entityManager = EntityManager::create(
    $params,
    $config
);


$users = [['Jon', 'Bunjaku'], ['Laurent', 'Romer'], ['Florian', 'Gubler']];

$grade = (new Grade())
    ->setGrade(5.5)
    ->setSubjectName('Deutsch')
    ->setFkUser(1);


foreach ($users as [$name, $lastName]) {
    $user = (new User())
        ->setName($name)
        ->setLastName($lastName);

    $grade->addUser($user);
    $entityManager->persist($user);


}
$entityManager->persist($grade);
