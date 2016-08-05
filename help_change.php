<?php
require_once( 'kf-config.php' );

$id = $_GET['id'];
$q = $_GET['q'];
$q = "'".$q."'";
$ele = $_GET['ele'];

$sql = "UPDATE help_tickets SET $ele=$q WHERE help_id=$id";
mysql_query($sql, $db);

?>