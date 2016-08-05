<?php
	require_once( 'kf-config.php' );
	
	$name = $_GET['name'];
	$name = "'".$name."'";
	
	$email = $_GET['email'];
	$email = "'".$email."'";
	
	$subject = $_GET['subject'];
	$subject = "'".$subject."'";
	
	$problem = $_GET['text'];
	$problem = "'".$problem."'";
	
	//set sql query			
	$sql = "INSERT INTO help_tickets(name ,email, subject, problem) VALUES($name,$email,$subject,$problem)";

	//send query 
	mysql_query($sql, $db);

	header('location:help_tickets.php');
?>