<?php

require('core/init.php');
include('partials/header.php');

use App\Models\Person;

$person = Person::find($_REQUEST['id']);
if (!$person) {
	die("Person with ID {$_REQUEST['id']} does not exist.");
}

?>

<h1>Person #<?php echo $person->id; ?></h1>

<dl class="row">
	<dt class="col-sm-2">Name</dt>
	<dd class="col-sm-10"><?php echo $person->name; ?></dd>

	<dt class="col-sm-2">Title</dt>
	<dd class="col-sm-10"><?php echo $person->title; ?></dd>
</dl>

<?php
	dump($person->phones->toArray());
?>

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
			foreach ($person->phones as $phone) {
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
