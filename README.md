To make connection, you may need to include this secure file, like we have in our own babbage accounts.
The connectDB() function in php-funcs.php needs this file.

secure/database.php:

<?php
	DEFINE("HOST","host=dbhost-pgsql.cs.missouri.edu");
	DEFINE("DBNAME","dbname=<ourUserName>");
	DEFINE("USERNAME","user=<ourUserName>");
	DEFINE("PASSWORD","password=<ourPassword>");
?>


