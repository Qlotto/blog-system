<?php

class Model_Login extends Model
{
	public function get_data()
	{	
		$bd = new Database();

		$name = $_POST['name'];
		$password = $_POST['password'];

		$result = $bd->query("SELECT * FROM `users` WHERE `name` = '$name' AND `password` = '$password'");

		if($result == NULL){
			echo "введи логин и пароль";
		}

		if($result){
			header('Location: Main');
		} 
	}
}
