<?php

//function to connect to the database from any page.  
//Returns connection variable
function connectDB()
{
	//connect to DB
	include("../../secure/database.php");
	$conn = pg_connect(HOST." ".DBNAME." ".USERNAME." ".PASSWORD);
	if($conn){	/*echo "<p>Successfully connected to DB</p>";*/		} 
	else{	echo "<p>Failed to connect to DB</p>";	exit;	}
	return $conn;
}


function printTable($result)
{
	//Print results of log query
	echo "<table>\n";
	//Make header row
	echo "\t<tr>\n";
	for($i=0 ; $i < pg_num_fields($result); $i++)
	{
		echo "\t<th>".pg_field_name($result, $i)."</th>\n";
	}
	echo "\t</tr>\n";
	//print rest of table
	while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) 
	{
		echo "\t<tr>\n";
		foreach ($line as $col_value) 
		{
			echo "\t\t<td>".$col_value."</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
}


?>