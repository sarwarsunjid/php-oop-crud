<?php
class User {
	public $con;
	public $username = '';
	public $email = '';
	public $password = '';
	// public $p = '';
	public function __construct() {
		$this->con = mysqli_connect("localhost", "root", "", "userdata");

		// if ($this->con) {
		//     echo "Database is Connected";
		// } else {
		//     echo "Database Not Connected";
		// }
	}
	public function prepare($data = '') {
		//print_r($data);
		if (!empty($data['username'])) {
			$this->username = $data['username'];
		}
		if (!empty($data['email'])) {
			$this->email = $data['email'];
		}
		if (!empty($data['password'])) {
			$this->password = $data['password'];
		}
		if (!empty($data['id'])) {
			$this->id = $data['id'];
		}
	}

	public function insert() {
		$query = "INSERT INTO `user_data`(`id`, `username`, `email`, `password`) VALUES ('null','$this->username','$this->email','$this->password')";
		if (mysqli_query($this->con, $query)) {
			echo "DATA INSERTED";
		} else {
			echo "Data Not inserted";
		}

	}
	public function show() {
		$query = "SELECT * FROM `user_data`";
		if ($rec = mysqli_query($this->con, $query)) {

			while ($row = mysqli_fetch_assoc($rec)) {

				$data[] = $row;

			}

			//print_r($data);
			return $data;
		} else {
			echo "Data not found";
		}
	}

	public function singleView() {
		$query = "SELECT * FROM `user_data` where id='$this->id'";
		$rec = mysqli_query($this->con, $query);
		$data = mysqli_fetch_assoc($rec);
		return $data;
	}

	public function delete() {
		$query = "DELETE FROM `user_data` WHERE id='$this->id'";
		$rec = mysqli_query($this->con, $query);
		if ($rec) {
			echo "Record Deleted";
		} else {
			echo "Record Not Deleted";
		}
	}

}

?>