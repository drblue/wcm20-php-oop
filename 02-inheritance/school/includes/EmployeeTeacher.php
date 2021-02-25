<?php

class EmployeeTeacher extends Person implements EmployeeInterface, TeacherInterface {

	public function getClasses() {
		return [];
	}

	public function getStudents() {
		return [];
	}

	public function getSalary() {
		return 30000;
	}
}
