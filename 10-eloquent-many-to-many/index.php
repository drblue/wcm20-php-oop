<?php

require('core/init.php');
include('partials/header.php');

use App\Models\Course;
use App\Models\Student;

?>

<h1>My School</h1>

<h2>Courses</h2>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Students</th>
		</tr>
	</thead>
	<tbody>
		<?php
			foreach (Course::all() as $course) {
				?>
					<tr>
						<td><?php echo $course->id; ?></td>
						<td><?php echo $course->name; ?></td>
						<td>
							<ul>
								<?php
									foreach ($course->students()->orderBy('name', 'desc')->get() as $student) {
										echo "<li>{$student->name}</li>";
									}
								?>
							</ul>
						</td>
					</tr>
				<?php
			}
		?>
	</tbody>
</table>

<hr class="my-5" />

<h2>Students</h2>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Courses</th>
		</tr>
	</thead>
	<tbody>
		<?php
			foreach (Student::has('courses')->get() as $student) {
				?>
					<tr>
						<td><?php echo $student->id; ?></td>
						<td><?php echo $student->name; ?></td>
						<td><?php echo $student->email; ?></td>
						<td>
							<ul>
								<?php
									foreach ($student->courses as $course) {
										echo "<li>{$course->name}</li>";
									}
								?>
							</ul>
						</td>
					</tr>
				<?php
			}
		?>
	</tbody>
</table>

<?php
include('partials/footer.php');
