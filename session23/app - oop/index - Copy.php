<?php

/**
	User Model
	@var username
	@var Password
	@var full_name
	@var email

	
*/

class User {

	// attr's
	public $username;
	public $Password;
	public $full_name;
	public $email;

	// methodes
	public function insert() {
		// insert code
		return 'insert';
	}

	public function update() {
		// update code
		return 'update';
	}

	public function delete() {
		// delete code
		return 'delete';
	}

	public function select_all() {
		// select_all code
		return 'select_all';
	}

	public function find() {
		// find code
		return $this->full_name;
	}

	public function login() {
		// select_all code
		// return $username;
	}

}
// end User class


//new object from User model 
$user = new User;
$user2 = new User;




$user->full_name = "Ahmed Elnemr 2";
$user2->full_name = "Salah 1";

echo $user->find();