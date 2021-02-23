<?php

require_once('includes/helpers.php');

include('partials/header.php');
require_once('includes/Account.php');
require_once('includes/Person.php');

$people = [];

/**
 * Johans konto
 */
$johan = new Person('Johan', 'Nordström');
array_push($people, $johan);

$johans_konto = new Account('1234-56,789,012-3', 13370);

$johans_konto->withdraw(49, 'McVegan & Co', '2021-02-13');
$johans_konto->withdraw(4995, 'PS5', '2021-02-14'); // PS5 👾
$johans_konto->withdraw(99, 'Ebbas Café'); // Lunch 😋

$johans_sparkonto = new Account('1234-56,789,012-4', 4000);

$johan->addAccount($johans_konto);
$johan->addAccount($johans_sparkonto);

/**
 * Pelles konto
 */

$pelle = new Person('Pelle', 'Persson');
array_push($people, $pelle);

$pelles_konto = new Account('2345-67,890,123-4');

$pelles_konto->deposit(5000, 'Lön', '2021-01-25');
$pelles_konto->withdraw(150, 'Blommor', '2021-02-13');
$pelles_konto->withdraw(800, 'The Herbivore, Lund', '2021-02-14');

$pelle->addAccount($pelles_konto);

/**
 * Render view to user
 */

// dump($people, 'people');

echo "<h1>Kundfientlig Bank nr 1</h1>";
foreach ($people as $person) {
	echo "<h2>{$person->getFullName()}</h2>";

	foreach ($person->getAccounts() as $account) {
		echo "<h3>{$account->getAccountNumber()}</h3>";
		echo "<p><strong>Balance:</strong> {$account->getCurrentBalance()}</p>";

		echo "<h4>Transactions</h4>";
		echo "<table class=\"table table-striped\">";
		echo "<thead>";
		echo "<tr><th>Date</th><th>Description</th><th>Amount</th></tr>";
		echo "</thead>";
		echo "<tbody>";
		foreach ($account->getTransactions() as $transaction) {
			echo "<tr><td>{$transaction->getDate()}</td><td>{$transaction->getDescription()}</td><td>{$transaction->getAmount()}</td></tr>";
		}
		echo "</tbody>";
		echo "</table>";
	}

	echo "<hr />";
}

include('partials/footer.php');
