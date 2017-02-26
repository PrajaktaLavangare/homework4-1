<?php
$name = filter_input(INPUT_POST,'name');

if($name == null) {
	$error = "Invalid category data. Check all fields and try again.";
	include('error.php');

 }  else {
  	require_once('database.php');

//Add the product to database

	$query = 'INSERT INTO categories_guitar2
			(categoryName)
			VALUES
		 	(:name)';

	$statement = $db->prepare($query);
	$statement ->bindValue(':name', $name);
	$statement ->execute();
	$statement ->closeCursor();

	//Display The Category List Page
	include('category_list.php');

}
?>
