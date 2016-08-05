<?php
	require_once( 'kf-config.php' );
	
	$name = $_GET['name'];
	$name = "'".$name."'";
	
	$picture = $_GET['picture'];
	$picture = "'".$picture."'";
	
	$price = $_GET['price'];
	$price = "'".$price."'";
	
	$brand = $_GET['brand'];
	$brand = "'".$brand."'";
	
	$supplier = $_GET['supplier'];
	$supplier = "'".$supplier."'";
	
	$category = $_GET['category'];
	$category = "'".$category."'";
	
	$about = $_GET['about'];
	$about = "'".$subject."'";
		
	//set sql query			
	$sql = "INSERT INTO products(name ,picture, price, brand,supplier,category,about) VALUES $name,$picture,$price,$brand,$supplier,$category,$about)";

	//send query 
	mysql_query($sql, $db);

	header('location:mod_products.php');
?>