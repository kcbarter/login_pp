<?php
ini_set("display_errors", 1);
error_reporting(E-ALL);

$user1 = new User();
$user2 = new User();
$user3 = new User();

$user1->setUsername('bob');
$user1->setPassword('chocolateCake');
$user2->setUsername('Dilly');
$user2->setPassword('Dilly');
$user3->setUsername('bob');
$user3->setPassword('chocolatecake');

$user1->login();
$user2->login();
$user3->login();

$user1->logout();

echo $user1->getUsername();