<?php

require('core/init.php');

// use User;
use Admin\User as AUser;
use drblue\JohansHelpers\Strings as JStrings;

$user = new User();
echo $user->getInfo();
echo "<br>";

$user = new AUser();
echo $user->getInfo();
echo "<br>";

$msg = "Stop talking I am hangry!";
$output = JStrings::leetSpeak($msg);
echo $output;
