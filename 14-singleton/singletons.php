<?php

require('includes/API.php');

$urls = [
	"https://www.google.com",
	"https://www.medieinstitutet.se",
	"https://www.thehiveresistance.com",
];

$api = null;
foreach ($urls as $url) {
	$api = API::getInstance();
	// $api = new API();
	$res = $api->get($url);

	var_dump($api);
}
