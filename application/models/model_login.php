<?php

class Model_Login extends Model
{
	public function get_data()
	{	
		$bd = new Database();

		if(isset($_POST['name']) && isset($_POST['password'])){
			$name = $_POST['name'];
			$password = $_POST['password'];

			$result = $bd->query("SELECT * FROM `users` WHERE `name` = '$name' AND `password` = '$password'");

			if($result){
				header('Location: Main');
			} else {
				print_r('Логин или пароль введены неверно!');
			}
		}
	}
}
