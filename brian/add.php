<?php 
require_once 'app/init.php';

if(isset($_POST['name'])){
	$name = trim($_POST['name']);
	
	if(!empty($name)){
		$addedQuery = $db->prepare("
			INSERT INTO items(id, name , user, done) 
			VALUES (NULL, :name, :user, 0)
		");
		
	    $addedQuery->execute([
			'name' => $name,
			'user' => $_SESSION['user_id']
		]);
	}
	
}
header('Location: todo.php');