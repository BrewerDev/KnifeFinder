<?php
/** The name of the database for Site */
define('DB_NAME', 'pb0612_knifefinder');

/** MySQL database username */
define('DB_USER', 'pb0612_admin');

/** MySQL database password */
define('DB_PASSWORD', 'haputRu5ar4t');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** Connect to Server */
$db = mysql_connect( 'localhost', DB_USER, DB_PASSWORD);
        
mysql_select_db( DB_NAME, $db);// select database
