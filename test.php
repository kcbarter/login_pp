<?php

include ("classes/admin.php");

$user1 = new Admin("bob", "chocolateCake", 1);
$user2 = new User();
$user3 = new User();

$user1->setAccessLevel(5);
$user2->setUsername('Dilly');
$user2->setPassword('Dilly');
$user3->setUsername('bob');
$user3->setPassword('chocolatecake');

$user1->login();
$user2->login();
$user3->login();

echo '<p>level: '.$user1->getAccessLevel().'</p>';
$user1->editUser($user2);

$user1->logout();

echo "bob logged out...........".$user1->getUsername();

echo "woop";