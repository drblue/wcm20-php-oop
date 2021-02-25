<?php

class Teacher extends Person implements TeacherInterface {
	public function getClasses() {
		return ["Ankeborgs dagis"];
	}

	public function getStudents() {
		return ["Kalle", "Kajsa", "Musse", "Mimmi"];
	}
}
