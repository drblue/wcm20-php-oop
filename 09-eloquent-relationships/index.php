<?php

require('core/init.php');
include('partials/header.php');

use App\Models\Person;
use App\Models\Phone;

?>

<h1>People vs Phones</h1>

<h2>People</h2>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Id</th>
			<th>Model</th>
			<th>IMEI</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php
			foreach (Person::all() as $person) {
				?>
					<tr>
						<td><?php echo $person->id; ?></td>
						<td><?php echo $person->name; ?></td>
						<td><?php echo $person->title; ?></td>
						<td>
							<a href="person.php?id=<?php echo $person->id; ?>" class="btn btn-primary btn-sm">View &raquo;</a>
						</td>
					</tr>
				<?php
			}
		?>
	</tbody>
</table>

<hr class="my-5" />

<h2>Phones</h2>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Id</th>
			<th>Model</th>
			<th>IMEI</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php
			foreach (Phone::all() as $phone) {
				?>
					<tr>
						<td><?php echo $phone->id; ?></td>
						<td><?php echo $phone->model; ?></td>
						<td><?php echo $phone->imei; ?></td>
						<td>
							<a href="phone.php?id=<?php echo $phone->id; ?>" class="btn btn-primary btn-sm">View &raquo;</a>
						</td>
					</tr>
				<?php
			}
		?>
	</tbody>
</table>

<?php
include('partials/footer.php');
