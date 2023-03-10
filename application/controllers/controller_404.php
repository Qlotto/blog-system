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
		$data = $this->model->get_data();
<<<<<<< HEAD
		$this->view->generate('404_view.php', 'template_view.php', $data);
=======
		$this->view->generate('404_view.php', 'template_view.php');
>>>>>>> 663a73890c2e45624002c192126865ff8c5142c9
	}
}
