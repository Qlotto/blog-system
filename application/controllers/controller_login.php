<?php

class Controller_Login extends Controller
{
	function __construct()
	{
		$this->model = new Model_Login();
		$this->view = new View();
	}

	function action_index()
	{	
		$data = $this->model->get_data();
<<<<<<< HEAD
		$this->view->generate('login_view.php', 'template_view.php', $data);
=======
		$this->view->generate('login_view.php', 'template_view.php');
>>>>>>> 663a73890c2e45624002c192126865ff8c5142c9
	}
}
