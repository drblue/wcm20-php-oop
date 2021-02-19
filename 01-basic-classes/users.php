<?php

require('includes/User.php');

$users = [];

$peter = new User("Peter Jacobsen", "peter@medieinstitutet.se");
$peter->setRole(2);
array_push($users, $peter);

$johan = new User("Johan Nordström", "jn@thehiveresistance.com");
$johan->setRole(2);
array_push($users, $johan);

echo "<pre>";
foreach($users as $user) {
	echo "{$user->getName()} ({$user->getEmail()}) has role {$user->getRoleName()}.\n";
}

var_dump($users);
echo "</pre>";
