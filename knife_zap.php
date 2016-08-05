 <?php 
 	require_once( 'kf-config.php' );
 	
	$id = $_GET['id'];
	$list = $_GET['list'];
	echo $id;
	echo $list;
	
	//set sql query			
	$sql = "DELETE * FROM $list WHERE knife_id=$id";
	
	//send query 
	mysql_query($sql, $db);
	
	$sql = "DELETE * FROM products WHERE knife_id=$id";
	
	mysql_query($sql, $db);
	//header('location:cart.php');
?>

</body>
</html>