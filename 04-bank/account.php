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
$accountController = new AccountController();
$account = $accountController->getAccount($account_id);

if (!$account) {
	die("Could not find account with ID {$account_id}.");
}

// Fetch the account's owner
$personController = new PersonController();
$person = $personController->getPerson($account->person_id);

if (!$person) {
	die("Could not find person with ID {$person_id}.");
}

$transactionController = new TransactionController();
$transactions = $transactionController->getTransactions($account_id);

if (isset($_REQUEST['res'])) {
	if ($_REQUEST['res'] === 'success') {
		?>
			<div class="alert alert-success" role="alert">
				Transaction successfully created.
			</div>
		<?php
	} else {
		?>
			<div class="alert alert-danger" role="alert">
				😱 DANGER WILL ROBINSON! Failed to create transaction!
			</div>
		<?php
	}
}

?>

<h1>Transactions for account <?php echo $account->accountnumber; ?></h1>

<dl class="row">
	<dt class="col-sm-2">Owner</dt>
	<dd class="col-sm-10"><?php echo $person->getFullName(); ?></dd>

	<dt class="col-sm-2">Balance</dt>
	<dd class="col-sm-10"><?php echo $account->balance; ?></dd>
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
				<td><?php echo $transaction->id; ?></td>
				<td><?php echo $transaction->date; ?></td>
				<td><?php echo $transaction->description; ?></td>
				<td><?php echo $transaction->amount; ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<hr class="my-4" />

<?php
	include('partials/create-transaction-form.php');
?>

<hr class="my-4" />

<a href="person.php?id=<?php echo $account->person_id; ?>" class="btn btn-secondary mt-4">&laquo; Back</a>

<?php
include('partials/footer.php');
