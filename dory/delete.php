<?php


$id = 5; // get id through query string
$pdo = require 'app/init.php';

$del = 'DELETE FROM items
		WHERE items.id = :id';// delete query

$statement = $pdo->prepare($del);
$statement->bindParam(':id', $id, PDO::PARAM_INT);

// execute the statement
header('Location: todo.php');
