<?php

class Controller_Article extends Controller
{
	function action_index()
	{	
		$this->view->generate('article_view.php', 'template_view.php');
	}
}
