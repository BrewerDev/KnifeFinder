<?php session_start();
require_once( 'kf-config.php' );
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Knife Finder</title>
<link rel="stylesheet" type="text/css" href="css/knifefinder.css" />
<link rel="stylesheet" type="text/css" href="css/glossary.css" />
<style type="text/css">

			    
</style>
</head>

<body>
	<div id="container">
    	
		<?php
        	include "php/branding.php";
		
        	include "php/nav_main.php";
			
			include "php/nav_sub_encyc.php";
	   ?>
        
            <div id="content_main"><!---->
				<?php														
					$sql = "SELECT * FROM definitions ORDER BY entry";
					
					$result = mysql_query($sql, $db);
					
					
					//echo	"<ul class='definition'>";
					while($row = mysql_fetch_array($result))// Loops untill the end of the array
					{
											
						echo	"<div class='definition'>".
									"<p class='def_name'>".$row['entry'].": "."</p>".
									"<p class='def_body'>".$row['definition']."</p>".
								"</div>";
								//"<p class='capper'><p>";
									
									
							
						
							
							
									
			
					}
					//echo "</ul>";

                ?>
            </div><!--closes content_main-->
        
		<?php
			include "php/site_info.php";
		?>
    </div><!--closes container-->
</body>
</html>