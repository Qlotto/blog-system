<?php

class Controller_404 extends Controller
{
	function __construct()
	{
		$this->model = new Model_404();
		$this->view = new View();
	}

	function action_index()
	{	
		$this->model->get_data();
		$this->view->generate('404_view.php', 'template_view.php');
	}
}
