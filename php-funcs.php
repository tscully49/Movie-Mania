<?php

//function to connect to the database from any page.  
//Returns connection variable
function connectDB()
{
	//connect to DB
	include("../../secure/database.php");
	$conn = pg_connect(HOST." ".DBNAME." ".USERNAME." ".PASSWORD);
	if($conn){	echo "<p>Successfully connected to DB</p>";		} 
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

function printActorTable($result)
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


function print_all_genres() { // Functions which prints out a table for each genres and displays 10 movies from that genres in the table 

    include("../secure/database.php");
    $conn=pg_connect(HOST. " ".DBNAME." ".USERNAME." ".PASSWORD); // Connects to the database

    if(!$conn){
        echo"<p> Connection Fail</p>";
    }

    $all_genres = pg_prepare($conn, "genre_query", 'SELECT genre FROM genre');
    $all_genres = pg_execute($conn, "genre_query", array());

    while ($one_genre = pg_fetch_array($all_genres, null, PGSQL_ASSOC)) {
    	$this_genre = pg_prepare($conn, "genre_search", 'WITH id_list AS (SELECT movie_id FROM movie_genre as mg INNER JOIN genre as g ON (mg.genre_id = g.genre_id) WHERE g.genre = $1) SELECT title FROM movie INNER JOIN id_list ON (id_list.movie_id = movie.id) ORDER BY title ASC LIMIT 10');
    	$this_genre = pg_execute($conn, "genre_search", array($one_genre['genre']));

		echo"\n<div class='col-lg-3'>";
		    echo"\n\t<div class='panel panel-default'>";
		        echo"\n\t\t<div class='panel-heading'>";
		            echo"\n\t\t\t<h3 class='panel-title'><i class='fa fa-tasks fa-fw'></i><strong> $one_genre Movies</strong></h3>"; 
		        echo"\n\t\t</div>";
		        echo"\n\t\t<div class='panel-body'>";
		            echo"\n\t\t\t<div class='table-responsive'>";
		                echo"\n\t\t\t\t<table class='table table-bordered table-hover table-striped'>";
		                    echo"\n\t\t\t\t\t<thead>";
		                        echo"\n\t\t\t\t\t\t<tr>";

		                                $num_fields = pg_num_fields($this_genre);
		                                for ($i=0;$i<$num_fields;$i++) { // Prints out all headers for the fields 
		                                    $fieldName = pg_field_name($this_genre, $i);
		                                    echo "\n\t\t\t\t\t\t\t<th>$fieldName</th>"; 
		                                }

		                        echo"\n\t\t\t\t\t\t</tr>";
		                    echo"\n\t\t\t\t\t</thead>";
		                    echo"\n\t\t\t\t\t<tbody>";

		                        while ($info = pg_fetch_array($this_genre, null, PGSQL_ASSOC)) {
		                            echo"<tr>";
		                            foreach($info as $col) { // Prints out all the info 
		                                echo"\n\t\t<td>$col</td>";
		                            }
		                            echo"\n\t</tr>";
		                        }

		                    echo"\n\t\t\t\t\t</tbody>";
		                echo"\n\t\t\t\t</table>";
		            echo"\n\t\t\t</div>";
		        	echo"\n\t\t\t<div class='text-right'>";
		                echo"\n\t\t\t\t<a href='#'>View All $one_genre Movies <i class='fa fa-arrow-circle-right'></i></a>";
		            echo"\n\t\t\t</div>";
		        echo"\n\t\t\t</div>";
		    echo"\n\t\t</div>";
		echo"\n\t</div>";
	}
	pg_close($conn);
}


function print_single_genre($genre) { // prints out a table for a single genre which is passed through the parameter
	<div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <?PHP
                    if ($_GET['genre'] != NULL) {
                        $type = $_GET['genre'];
                        echo"<h3 class='panel-title'><i class='fa fa-tasks fa-fw'></i><strong> Every $type Movie</strong></h3>";
                    }
                    else {
                        $type = "All";
                        echo"<h3 class='panel-title'><i class='fa fa-tasks fa-fw'></i><strong> $type Movies</strong></h3>"; 
                    }
                ?>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <?PHP
                                    include("../secure/database.php");
                                    $conn=pg_connect(HOST. " ".DBNAME." ".USERNAME." ".PASSWORD); // Connects to the database
                                    if(!$conn){
                                        echo"<p> Connection Fail</p>";
                                    }
                                    $this_genre = pg_prepare($conn, "genre_query", 'WITH id_list AS (SELECT movie_id FROM movie_genre as mg INNER JOIN genre as g ON (mg.genre_id = g.genre_id) WHERE g.genre = $1) SELECT title FROM movie INNER JOIN id_list ON (id_list.movie_id = movie.id) ORDER BY title ASC LIMIT 10');
                                    $this_genre = pg_execute($conn, "genre_query", array($type));
                                    $num_fields = pg_num_fields($this_genre);
                                    for ($i=0;$i<$num_fields;$i++) { // Prints out all headers for the fields 
                                        $fieldName = pg_field_name($this_genre, $i);
                                        echo "\t\t\n<th>$fieldName</th>"; 
                                    }
                                ?>
                            </tr>
                        </thead>
                        <tbody>
                        <?PHP
                            while ($all_genres = pg_fetch_array($this_genre, null, PGSQL_ASSOC)) {
                                echo"<tr>";
                                foreach($all_genres as $col) { // Prints out all the info 
                                    echo"\n\t\t<td>$col</td>";
                                }
                                echo"\n\t</tr>";
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            	<div class="text-right">
                    <a href="#">View All Movies <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
}

?>