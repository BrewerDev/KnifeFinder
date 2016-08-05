 <?php 
 	require_once( 'kf-config.php' );
 	
	$id = $_GET['id'];
	$list = $_GET['list'];
	echo $id;
	echo $list;
	
	//set sql query			
	$sql = "DELETE FROM $list WHERE id=$id";
	echo $sql;
	//send query 
	mysql_query($sql, $db);
	
	//header('location:cart.php');
?>

</body>
</html>