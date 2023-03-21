<?php

class Model_Article extends Model
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

		if(isset($_GET['id'])){
			$article_id = intval(htmlspecialchars($_GET["id"]));
			$article_query = "SELECT articles.id, title, description, category_id, category_name FROM articles
			 LEFT JOIN categories ON articles.category_id = categories.id WHERE articles.id = $article_id";

			$article = $db->query($article_query);

			$result['article'] = $article[0];

			if(isset($_POST['title']) && isset($_POST['description']) && isset($_POST['category'])){
				$title = $_POST['title'];
				$description = $_POST['description'];
				$category = $_POST['category'];
	
				$update_query = "UPDATE `articles` SET `title` = '$title', `description` = '$description',
					`category_id` = $category WHERE id = $article_id";
				
				$db->query($update_query);
				header('Location: Article?id='.$article_id);
			}
		}

		return $result;
	}
}
