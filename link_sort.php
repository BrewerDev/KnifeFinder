<?php session_start();
require_once( 'kf-config.php' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Knife Finder</title>
<link rel="stylesheet" type="text/css" href="css/knifefinder.css" />
</head>

<body>
	<div id="container">
		<?php
            include "php/branding.php";
                
            include "php/nav_main.php";
                    
            include "php/nav_sub_hm.php";
            
        ?>
        <div id="content_main">
            <?php
			
		echo $list;
			                
                $sql = "SELECT * FROM links ";
				
                $result = mysql_query($sql, $db);
				
                while($row = mysql_fetch_array($result))// Loops untill the end of the array
                {
						// prints result to screen  
						echo	"id = ".$row['id']."<br/>".
						
								"date = ".$row['date']."<br/>".
						
								"name = ".$row['name']."<br/>".
						
								"url = ".$row['url']."<br/>".
						
								"logo = ".$row['logo']."<br/>".
						
								"about = ".$row['about']. 
						
								'<br/><br/><br/>';
                }
            ?>    
        </div>
    <?php
                include "php/site_info.php";
    ?>
</div>
</body>
</html>