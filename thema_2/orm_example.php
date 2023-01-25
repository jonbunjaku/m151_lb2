<?php

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
}