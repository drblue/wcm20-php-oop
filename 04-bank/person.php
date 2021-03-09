<?php

require('core/init.php');
include('partials/header.php');

if (empty($_REQUEST['id'])) {
	die("No person id.");
}

use App\Controllers\AccountController;
use App\Controllers\PersonController;
use App\Controllers\TransactionController;

$person_id = $_REQUEST['id'];
$personController = new PersonController();
$person = $personController->getPerson($person_id);

if (!$person) {
	die("Could not find person with ID {$person_id}.");
}

$accountController = new AccountController();
$accounts = $accountController->getAccounts($person_id);

$transactionController = new TransactionController();

?>

<h1>Accounts for <?php echo $person->getFullName(); ?></h1>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Id</th>
			<th>Account Number</th>
			<th>Balance</th>
			<th>Transactions</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<!-- here be content -->
		<?php foreach ($accounts as $account): ?>
			<?php $transactionCount = $transactionController->getTransactionCount($account->id); ?>
			<tr>
				<td><?php echo $account->id; ?></td>
				<td><?php echo $account->accountnumber; ?></td>
				<td><?php echo $account->balance; ?></td>
				<td><?php echo $transactionCount; ?></td>
				<td>
					<a href="account.php?id=<?php echo $account->id; ?>" class="btn btn-primary">View &raquo;</a>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a href="index.php" class="btn btn-secondary mt-4">&laquo; Back</a>

<?php
include('partials/footer.php');
