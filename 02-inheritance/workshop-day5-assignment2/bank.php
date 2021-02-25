<?php

require_once('includes/Account.php');
require_once('includes/CreditAccount.php');
require_once('includes/SavingsAccount.php');

$accounts = [
	new Account("1234", 100),
	new SavingsAccount("2345", 250),
	new CreditAccount("3456", -5000),
];

foreach ($accounts as $account) {
	printf('<h1>%s</h1>', $account->getAccountNumber());
	printf('Type of account: %s<br>', get_class($account));
	printf('Current balance: %.2f<br>', $account->getBalance());
	printf('Account interest rate: %.2f&percnt;<br>', $account->getInterest() * 100);
	printf('Yearly interest with current balance: %.2f<br>', $account->getTotalInterest());

	echo "<hr>";
}
