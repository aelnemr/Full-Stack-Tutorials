<?php

class Course{

	public $name;
	private $max_no_student;
	private $min_no_student;
	private $no_students;

	public function __construct($name, $no_students) {
		$this->max_no_student = 12;
	 	$this->min_no_student = 5;
	 	// echo "Hello From construct";

	 	$this->set_no_students($no_students);
	 	$this->name = $name;

	}

	private function set_no_students($no_students) {
		
		if ($this->max_no_student >= $no_students &&
			 $this->min_no_student <= $no_students) {
				
				$this->no_students = $no_students;

			return true;
		} else {
			return false;
		}

	}

	public function get() {
		return $this->name . " " . $this->no_students;
	}



}

$course = new Course('PHP', 6);

$course->name .= " & SQL";

echo $course->get();