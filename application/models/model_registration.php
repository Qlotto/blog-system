<?php

class Model_Registration extends Model
{
	public function get_data()
	{	
		$db = new Database();

		if(isset($_POST['name']) && isset($_POST['password'])){
			$name = $_POST['name'];
			$password = $_POST['password'];

			$query = "INSERT INTO `users` (`name`, `password`) VALUES ('$name', '$password')";
			$db->query($query);
		}
	}
}
