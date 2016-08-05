<?php session_start();
	require_once( 'kf-config.php' );
	
	//set sql query			
	$sql = "DELETE FROM cart_list";
	
	//send query 
	mysql_query($sql, $db);


/*	session_destroy();*/
	header('location:index.php');
?>
