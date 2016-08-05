<?php
require_once( 'kf-config.php' );

$id = $_GET['id'];
$q = $_GET['q'];

$sql2 = "UPDATE cart_list SET quantity=$q WHERE id=$id";
mysql_query($sql2, $db);

?>