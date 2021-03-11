<h2>Create transaction</h2>

<form class="row row-cols-lg-auto g-3 align-items-center mt-2" action="create_transaction.php" method="POST">

	<input type="hidden" name="account_id" value="<?php echo $account->id; ?>">
	<input type="hidden" name="person_id" value="<?php echo $_REQUEST['person_id']; ?>">

	<div class="col-12">
		<div class="form-group">
			<label class="visually-hidden" for="date">Date of transaction</label>
			<input type="date" class="form-control" name="date" id="date" placeholder="Date" required>
		</div>
	</div>

	<div class="col-12">
		<div class="form-group">
			<label class="visually-hidden" for="description">Description of transaction</label>
			<input type="text" class="form-control" name="description" id="description" placeholder="Description">
		</div>
	</div>

	<div class="col-12">
		<div class="form-group">
			<label class="visually-hidden" for="amount">Amount of transaction</label>
			<input type="number" class="form-control" name="amount" id="amount" placeholder="Amount" required>
		</div>
	</div>

	<div class="col-12">
		<button class="btn btn-primary" type="submit">Add transaction</button>
	</div>
</form>
