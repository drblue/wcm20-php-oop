<?php

require('core/init.php');
include('partials/header.php');

if (empty($_REQUEST['id'])) {
	die("No person id.");
}

$personController = new PersonController($dbh);
$person = $personController->getPerson($_REQUEST['id']);

// TODO: Remove this line
$accounts = [];

?>

<h1>Accounts for <?php echo $person->getFullName(); ?></h1>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Id</th>
			<th>Account Number</th>
			<th>Balance</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<!-- here be content -->
		<?php foreach ($accounts as $account): ?>
			<tr>
				<td><?php echo $account->getId(); ?></td>
				<td><?php echo $account->getAccountNumber(); ?></td>
				<td><?php echo $account->getBalance(); ?></td>
				<td>
					<a href="account.php?id=<?php echo $account->getId(); ?>" class="btn btn-primary">View &raquo;</a>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<?php
include('partials/footer.php');
