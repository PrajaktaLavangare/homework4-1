<?php
require_once('database.php');

//GET IDs

$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);

//Delete the product from database

if ($category_id != false) {

$query = 'DELETE FROM categories_guitar2 WHERE categoryID = :category_id';

$statement = $db ->prepare($query);
$statement ->bindValue(':category_id', $category_id);
$success = $statement ->execute();
$statement ->closeCursor();
}

//Display the category List page
include('category_list.php');
?>
