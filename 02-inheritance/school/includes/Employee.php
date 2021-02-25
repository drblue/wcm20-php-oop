<?php

class Employee extends Person implements EmployeeInterface {
	public $salary = 30000; // ??

	public function getSalary() {
		return $this->salary;
	}
}
