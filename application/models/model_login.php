<?php

class Model_Login extends Model
{
	public function get_data()
	{	
		$db = new Database();

		if(isset($_COOKIE['user_id'])){
			setcookie("user_id","",time()-3600,"/");
		}

		if(isset($_POST['name']) && isset($_POST['password'])){
			$name = $_POST['name'];
			$password = $_POST['password'];

			$result = $db->query("SELECT * FROM `users` WHERE `name` = '$name' AND `password` = '$password'");

			if($result){

				setcookie('user_id', $result[0]['id'] , 0, '/');

				header('Location: Main');
			} else {
				print_r('Логин или пароль введены неверно!');
			}
		}
	}
}
