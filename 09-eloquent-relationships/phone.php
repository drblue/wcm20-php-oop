<?php

require('core/init.php');
include('partials/header.php');

use App\Models\Phone;

$phone = Phone::find($_REQUEST['id']);
if (!$phone) {
	die("Phone with ID {$_REQUEST['id']} does not exist.");
}

?>

<h1>Phone #<?php echo $phone->id; ?></h1>

<?php
	dump($phone->person);
?>

<dl class="row">
	<dt class="col-sm-2">IMEI</dt>
	<dd class="col-sm-10"><?php echo $phone->imei; ?></dd>

	<dt class="col-sm-2">Model</dt>
	<dd class="col-sm-10"><?php echo $phone->model; ?></dd>

	<dt class="col-sm-2">Owner</dt>
	<dd class="col-sm-10">
		<?php
			if ($phone->person) {
				?>
					<a href="person.php?id=<?php echo $phone->person->id; ?>">
						<?php echo $phone->person->name; ?>
					</a>
				<?php
			} else {
				?>
					<span class="text-muted">Phone has no owner.</span>
				<?php
			}
		?>
	</dd>
</dl>

<?php
include('partials/footer.php');
