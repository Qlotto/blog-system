<?php

class Model_Login extends Model
{
	public function get_data()
	{	
		$bd = new Database();

		$name = $_POST['name'];
		$password = $_POST['password'];

		$result = $bd->query("SELECT * FROM `users` WHERE `name` = '$name' AND `password` = '$password'");

<<<<<<< HEAD
=======
		if($result == NULL){
			echo "введи логин и пароль";
		}

>>>>>>> 663a73890c2e45624002c192126865ff8c5142c9
		if($result){
			header('Location: Main');
		} 
	}
}
