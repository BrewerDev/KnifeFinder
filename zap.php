<?php session_start();
	require_once( 'kf-config.php' );
	
	$id = $_GET['id'];
		
	//set sql query			
	$sql = "DELETE FROM cart_list WHERE id=$id";
	
	//send query 
	mysql_query($sql, $db);
	
	header('location:cart.php');
?>

</body>
</html>