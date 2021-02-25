<?php

require_once('includes/helpers.php');

include('partials/header.php');
require_once('includes/Account.php');
require_once('includes/Person.php');

$people = [];

echo "<h1>Kundfientlig Bank nr 1</h1>";

/**
 * Johans konto
 */
$johan = new Person('Johan', 'Nordström');
array_push($people, $johan);

$johans_konto = new Account('1234-56,789,012-3', 13370);

$purchases = [
	['amount' => 49, 'description' => 'McVegan & Co', 'date' => '2021-02-13'],
	['amount' => 4995, 'description' => 'PS5', 'date' => '2021-02-14'],
	['amount' => 99, 'description' => 'Ebbas Café', 'date' => null],
];
echo "<h2>Purchases for Johans account</h2>";
foreach ($purchases as $purchase) {
	$res = $johans_konto->withdraw($purchase['amount'], $purchase['description'], $purchase['date']);
	if ($res) {
		printf('Withdrew %s kr for %s on %s. New balance: %s kr<br>',
			number_format($purchase['amount'], 2, ",", " "),
			$purchase['description'],
			$purchase['date'],
			number_format($johans_konto->getCurrentBalance(), 2, ",", " ")
		);
	} else {
		printf('<span style="color: #f00;">Failed to withdraw %s kr for %s on %s. Current balance: %s kr</span><br>',
			number_format($purchase['amount'], 2, ",", " "),
			$purchase['description'],
			$purchase['date'],
			number_format($johans_konto->getCurrentBalance(), 2, ",", " ")
		);
	}
}

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

$purchases = [
	['amount' => 150, 'description' => 'Blommor', 'date' => '2021-02-13'],
	['amount' => 800, 'description' => 'The Herbivore, Lund', 'date' => '2021-02-14'],
	['amount' => 4995, 'description' => '"PS5" - PS2 + PS3', 'date' => '2021-02-14'],
];
echo "<h2>Purchases for Pelles account</h2>";
foreach ($purchases as $purchase) {
	$res = $pelles_konto->withdraw($purchase['amount'], $purchase['description'], $purchase['date']);
	if ($res) {
		printf('Withdrew %s kr for %s on %s. New balance: %s kr<br>',
			number_format($purchase['amount'], 2, ",", " "),
			$purchase['description'],
			$purchase['date'],
			number_format($pelles_konto->getCurrentBalance(), 2, ",", " ")
		);
	} else {
		printf('<span style="color: #f00;">Failed to withdraw %s kr for %s on %s. Current balance: %s kr</span><br>',
			number_format($purchase['amount'], 2, ",", " "),
			$purchase['description'],
			$purchase['date'],
			number_format($pelles_konto->getCurrentBalance(), 2, ",", " ")
		);
	}
}

$pelle->addAccount($pelles_konto);


/**
 * Render view to user
 */

// dump($people, 'people');
echo "<hr />";

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
