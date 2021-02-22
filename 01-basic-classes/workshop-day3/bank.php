<?php

include('includes/header.php');
require('includes/Account.php');

/**
 * Johans konto
 */
$johans_konto = new Account('1234-56,789,012-3', 'Johan Nordström', 13370);

$johans_konto->withdraw(49, 'McVegan & Co', '2021-02-13');
$johans_konto->withdraw(4995, 'PS5', '2021-02-14'); // PS5 👾

/**
 * Pelles konto
 */
$pelles_konto = new Account('2345-67,890,123-4', 'Pelle Persson');

$pelles_konto->deposit(5000, 'Lön', '2021-01-25');
$pelles_konto->withdraw(150, 'Blommor', '2021-02-13');
$pelles_konto->withdraw(800, 'The Herbivore, Lund', '2021-02-14');

$accounts = [$johans_konto, $pelles_konto];

echo "<h1>Kundfientlig Bank nr 1</h1>";
foreach ($accounts as $account) {
	echo "<h2>{$account->getAccountNumber()}</h2>";
	echo "<h3>{$account->getOwner()}</h3>";
	echo "<p><strong>Balance:</strong> {$account->getCurrentBalance()}</p>";

	echo "<h4>Transactions</h4>";
	echo "<table class=\"table\">";
	echo "<thead>";
	echo "<tr><th>Date</th><th>Description</th><th>Amount</th></tr>";
	echo "</thead>";
	echo "<tbody>";
	foreach ($account->getTransactions() as $transaction) {
		echo "<tr><td>{$transaction[0]}</td><td>{$transaction[1]}</td><td>{$transaction[2]}</td></tr>";
	}
	echo "</tbody>";
	echo "</table>";

	echo "<hr />";
}

echo "<pre>";
var_dump($accounts);
echo "</pre>";

include('includes/footer.php');
