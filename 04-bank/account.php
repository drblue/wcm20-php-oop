<?php

require('core/init.php');
include('partials/header.php');

if (empty($_REQUEST['id'])) {
	die("No account id.");
}

use App\Controllers\AccountController;
use App\Controllers\PersonController;
use App\Controllers\TransactionController;

// Fetch requested account
$account_id = $_REQUEST['id'];
$accountController = new AccountController($dbh);
$account = $accountController->getAccount($account_id);

if (!$account) {
	die("Could not find account with ID {$account_id}.");
}

// Fetch the account's owner
$personController = new PersonController($dbh);
$person = $personController->getPerson($account->getPersonId());

if (!$person) {
	die("Could not find person with ID {$person_id}.");
}

$transactionController = new TransactionController($dbh);
$transactions = $transactionController->getTransactions($account_id);

?>

<h1>Transactions for account <?php echo $account->getAccountNumber(); ?></h1>

<dl class="row">
	<dt class="col-sm-2">Owner</dt>
	<dd class="col-sm-10"><?php echo $person->getFullName(); ?></dd>

	<dt class="col-sm-2">Balance</dt>
	<dd class="col-sm-10"><?php echo $account->getBalance(); ?></dd>
</dl>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Id</th>
			<th>Date</th>
			<th>Description</th>
			<th>Amount</th>
		</tr>
	</thead>
	<tbody>
		<!-- here be content -->
		<?php foreach ($transactions as $transaction): ?>
			<tr>
				<td><?php echo $transaction->getId(); ?></td>
				<td><?php echo $transaction->getDate(); ?></td>
				<td><?php echo $transaction->getDescription(); ?></td>
				<td><?php echo $transaction->getAmount(); ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a href="person.php?id=<?php echo $account->getPersonId(); ?>" class="btn btn-secondary mt-4">&laquo; Back</a>

<?php
include('partials/footer.php');
