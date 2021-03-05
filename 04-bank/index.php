<?php

require('core/init.php');
include('partials/header.php');

use App\Controllers\PersonController;

$personController = new PersonController();
$people = $personController->getPeople();

?>

<h1>Welcome to Bank</h1>

<h2 class="display-1">🤑</h2>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Accounts</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<!-- here be content -->
		<?php foreach ($people as $person): ?>
			<tr>
				<td><?php echo $person->id; ?></td>
				<td><?php echo $person->getFullName(); ?></td>
				<td class="text-muted">-</td>
				<td>
					<a href="person.php?id=<?php echo $person->id; ?>" class="btn btn-primary">View &raquo;</a>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<?php
include('partials/footer.php');
