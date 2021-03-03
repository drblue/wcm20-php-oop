<?php

require('vendor/autoload.php');

use Carbon\Carbon;

echo "<h1>Demo of composer packages</h1>";

echo "<h2>Carbon</h2>";

$timeHere = Carbon::now();
$timeInTokyo = Carbon::now('Asia/Tokyo');

echo "The current time here is: {$timeHere}<br>";
echo "The current time in Tokyo is: {$timeInTokyo}<br>";
echo "<br>";

$previousLecture = Carbon::createFromDate(2021, 02, 27);

echo "The previous lecture was " . $previousLecture->diffForHumans() . "<br>";

echo "<hr>";

echo "<h2>Faker</h2>";

echo "<h3>10 fake English users</h3>";

$faker = Faker\Factory::create('en_GB');

echo "<ul>";
for ($i = 0; $i < 10; $i++) {
	echo "<li>";
	echo "<strong>Name:</strong> {$faker->name()}<br>";
	echo "<strong>Address:</strong> {$faker->address()}<br>";
	echo "<strong>Email:</strong> {$faker->email()}<br>";
	echo "<strong>Phone:</strong> {$faker->phoneNumber()}";
	echo "</li>";
}
echo "</ul>";
