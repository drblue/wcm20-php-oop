<?php

require('includes/Account.php');

/**
 * Johans konto
 */
$johans_konto = new Account('1234-56,789,012-3', 'Johan Nordström', 13370);

$johans_konto->withdraw(49);
$johans_konto->withdraw(4995); // PS5 👾

/**
 * Pelles konto
 */
$pelles_konto = new Account('2345-67,890,123-4', 'Pelle Persson');

$pelles_konto->deposit(100);
$pelles_konto->withdraw(79);
$pelles_konto->withdraw(49);
$pelles_konto->withdraw(20);
$pelles_konto->withdraw(55);

$accounts = [$johans_konto, $pelles_konto];

echo "<h1>Kundfientlig Bank nr 1</h1>";
foreach ($accounts as $account) {
	echo "<h2>{$account->getAccountNumber()}</h2>";
	echo "<h3>{$account->getOwner()}</h3>";
	echo "<p><strong>Balance:</strong> {$account->getCurrentBalance()}</p>";

	echo "<h4>Transactions</h4>";
	echo "<ol>";
	foreach ($account->getTransactions() as $transaction) {
		echo "<li>{$transaction}</li>";
	}
	echo "</ol>";

	echo "<hr />";
}

echo "<pre>";
var_dump($accounts);
echo "</pre>";
