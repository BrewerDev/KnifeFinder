<?php
require_once( 'kf-config.php' );

$id = $_GET['id'];
$q = $_GET['q'];
$q = "'".$q."'";
$ele = $_GET['ele'];

$sql2 = "UPDATE knives SET $ele=$q WHERE knife_id=$id";
mysql_query($sql2, $db);

?>