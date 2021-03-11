<?php

require('core/init.php');

if (empty($_POST['account_id'])) {
	die("No account id.");
}

use App\Controllers\TransactionController;

// extract form data
$account_id = $_POST['account_id'];
$date = $_POST['date'];
$description = $_POST['description'];
$amount = $_POST['amount'];

$transactionController = new TransactionController();
$transaction = $transactionController->createTransaction($account_id, $date, $description, $amount);

if ($transaction) {
	// 👍🏻
	header("Location: account.php?id={$account_id}&person_id={$_REQUEST['person_id']}&res=success");
} else {
	// 👎🏻
	header("Location: account.php?id={$account_id}&person_id={$_REQUEST['person_id']}&res=error");
}
