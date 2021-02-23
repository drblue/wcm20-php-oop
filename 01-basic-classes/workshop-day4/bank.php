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
$johans_sparkonto->withdraw(500, 'Fika'); // Fika är lunch! 😋

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
	// echo "<h2 class=\"h3\">{$person->getFullName()}</h2>";
	// echo '<h2 class="h3">' . $person->getFullName() . '</h2>';
	printf('<h2 class="h3">%s</h2>', $person->getFullName());

	foreach ($person->getAccounts() as $account) {
		$totalTransactions = sprintf("%d %s",
			$account->getTotalTransactions(),
			// nbr_noun($account->getTotalTransactions(), "transaktion", "transaktioner")
			$account->getTotalTransactions() == 1 ? "transaktion" : "transaktioner"
		);

		printf('<h3>Kontonummer %s</h3>', $account->getAccountNumber());
		printf('<p>Antal transaktioner på kontot: %s<br>Saldo: %s kr</p>',
			$totalTransactions,
			number_format($account->getCurrentBalance(), 2, ",", " ")
		);
	}

	printf('<strong>Totalt kontosaldo: %s kr</strong>',
		number_format($person->getTotalBalance(), 2, ",", " ")
	);

	echo "<hr />";
}

include('partials/footer.php');
