<?php

class Model_Main extends Model
{
	public function get_data()
	{	
		$db = new Database();
		$result = array();

		// category output
		$categories_query = "SELECT * FROM `categories`";
		$categories = $db->query($categories_query);

		$categories_values = array();
		
		foreach($categories as $n){
			array_push($categories_values ,$n); 
		}

		$result['categories'] = $categories_values;

		// listing posts by category
		if(isset($_GET['category'])){

			$category_id = intval(htmlspecialchars($_GET["category"]));

			$query = "SELECT articles.id, title, description, date, category_id, user_id, category_name 
			FROM articles LEFT JOIN categories ON articles.category_id = categories.id WHERE `category_id` = $category_id";
			$posts = $db->query($query);

			$articles_values = array();

			foreach($posts as $n){
				array_push($articles_values, $n);
			}	

			$result['articles'] = $articles_values;

			if($category_id == 32){
				header('Location: Main');
			}

		}

		// creating posts
		if(isset($_POST['title']) && isset($_POST['description']) && isset($_POST['category'])){

			$title = $_POST['title'];
			$description = $_POST['description'];
			$category = $_POST['category'];
			$date = date('Y-m-d H:i:s');

			$query = "INSERT INTO `articles` (`title`, `description`, `category_id`, `date`, `user_id`) 
			VALUES ('$title', '$description', '$category', '$date', '28')";
			$db->query($query);

			header('Location: Main');

		}

		// display posts on homepage
		if(!isset($_GET['category'])){
			$articles_query = "SELECT articles.id, title, description, date, category_id, user_id, category_name  
			FROM articles JOIN categories ON articles.category_id = categories.id";

			$articles = $db->query($articles_query);

			$articles_values = array();

			foreach($articles as $n){
				array_push($articles_values, $n);
			}	

			$result['articles'] = $articles_values;
		}

		return $result;
	}
}
