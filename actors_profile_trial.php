<!--Displays actor's profile, including filmography, genres of movies starred in, and success of movies based on genre-->
<?php
    require("menu.php");
    ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Actor Profile
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-arrow-right"><span class="">Actors</span></i>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <?php

                    //connect to database
                    include("../secure/database.php");
                    $dbconn=pg_connect(HOST. " ".DBNAME." ".USERNAME." ".PASSWORD); // Connects to the database

                    if(!$dbconn){
                        echo"<p> Connection Fail</p>";
                    }

                    //get actor id from actor_name page
                    $id = $_GET['id'];
                    $error_query = "SELECT name FROM actor WHERE id = $1";

                    pg_prepare($dbconn, 'error', $error_query);
                    $error_check = pg_execute($dbconn, 'error', array($id));
                    if(pg_num_rows($error_check) == 0){
                        echo 'No results found!!! ';
                        echo $actor;
                    }
                    else{
                            $actor_name = pg_fetch_array($error_check,null,PGSQL_NUM);
                            $actor = $actor_name[0];
                            echo"<h3><strong>".$actor."'s</strong> Profile</h3>";


                    echo "<br/>";

	                echo "<div id='table1'>";
                    echo '<strong><u>Movies Starred In:</u></strong>';
	                echo "<br/><br/>";
                     //returns names of all the movies an actor was in
                    $movie_query = 'WITH id_list AS (
                            SELECT actor_in_movie.movie_id
                            FROM actor_in_movie INNER JOIN actor ON (actor_in_movie.actor_id = actor.id) 
                            WHERE actor.name = $1
                            ) 
                        SELECT DISTINCT (title) title
                        FROM movie INNER JOIN id_list ON (id_list.movie_id = movie.id) ORDER BY title';


                    pg_prepare($dbconn, 'movies', $movie_query);
                    $movies = pg_execute($dbconn, 'movies', array($actor));

                    //check that query was successful 
                    if(!$movies){
                        echo "Couldn't pull movie data";
                    }
          
            
                    //start table
                    echo "<table class='table table-striped'>\n";
                    echo "<tbody>";
                    //add column labels
                    
                    $i=0;
                    while($i<pg_num_fields($movies)){
                        $fieldname=pg_field_name($movies,$i);
                        echo "\t\t<td align = \"center\" ><strong> $fieldname </strong></th>\n";
                        $i++;
                    }

                    //print out info for each field
                    while($line=pg_fetch_array($movies,null,PGSQL_ASSOC)){
                        echo"\t<tr>\n";
                        foreach($line as $col_value){
                            echo "\t\t<td>$col_value</td>\n";
                        }
                        echo "\t</tr>";
                    }

	               echo "</tbody>";
                    echo "</table>";
	               echo "</div>";

                    //Returns the genres of movies that an actor has acted in, along with a count of movies per genre*/

                    $genre_query = 
                        'WITH genre_id_list AS (
                            WITH id_list AS (
                                SELECT actor_in_movie.movie_id 
                                FROM actor_in_movie INNER JOIN actor ON (actor_in_movie.actor_id = actor.id) 
                                WHERE actor.name = $1
                                ) 
                            SELECT genre_id FROM movie_genre INNER JOIN id_list ON (id_list.movie_id = movie_genre.movie_id)
                            )
                        SELECT genre, count(genre) 
                        FROM genre INNER JOIN genre_id_list USING(genre_id) GROUP BY genre';


                    pg_prepare($dbconn, 'genres', $genre_query);
                    $genres = pg_execute($dbconn, 'genres', array($actor));

                    //check that query was successful 
                    if(!$genres){
                        echo "Couldn't pull user's registration date";
                    }
            

	               echo "<div id='table2'>";
                    echo '<strong><u>Number of Movies Starred in per Genre</u></strong>';
	                echo "<br/><br/>";
                    //start table
	    
                    echo "<table class='table table-striped'>\n";
                    echo "<tbody>";
                    //add column labels
                    
                    $i=0;
                    while($i<pg_num_fields($genres)){
                        $fieldname=pg_field_name($genres,$i);
                        echo "\t\t<td align = \"center\" ><strong> $fieldname </strong></th>\n";
                        $i++;
                    }

                    //print out info for each field
                    while($line=pg_fetch_array($genres,null,PGSQL_ASSOC)){
                        echo"\t<tr>\n";
                        foreach($line as $col_value){
                            echo "\t\t<td>$col_value</td>\n";
                        }
                        echo "\t</tr>\n";
                    }

        	    echo "</tbody>";
                    echo "</table>\n";
        	    echo "</div>";
                //returns average movie rating grouped by genre. gives idea of actor's success in various types of movies
                $genre_rating_query = 
                    'WITH rating_list AS(
                        WITH genre_id_list AS (
                            WITH id_list AS (
                                SELECT actor_in_movie.movie_id 
                                FROM actor_in_movie INNER JOIN actor ON (actor_in_movie.actor_id = actor.id) 
                                WHERE actor.name = $1
                                ) 
                            SELECT genre_id, id_list.movie_id FROM movie_genre INNER JOIN id_list ON (id_list.movie_id = movie_genre.movie_id)
                            )
                        SELECT genre, genre_id_list.movie_id
                        FROM genre INNER JOIN genre_id_list USING(genre_id)
                        ) 
                    SELECT genre, ROUND(AVG(rt_critic) )
                    FROM movie INNER JOIN rating_list ON (rating_list.movie_id = movie.id) GROUP BY genre';


                pg_prepare($dbconn, 'genre_ratings', $genre_rating_query);
                $genre_rating = pg_execute($dbconn, 'genre_ratings', array($actor));

                //check that query was successful 
                if(!$genre_rating){
                    echo "Couldn't pull user's registration date";
                }

               
                echo "<div id='table3'>"; 
                echo '<strong><u>Success of movies by genre</strong></u> <br/>';
                echo 'Measured by <strong>average</strong> Rotten Tomato Critic rating for each genre';
                
                //start table
                echo "<table class='table table-striped'>\n";
                echo "<tbody>";
                //add column labels
                
                $i=0;
                while($i<pg_num_fields($genre_rating)){
                    $fieldname=pg_field_name($genre_rating,$i);
                    echo "\t\t<td align = \"center\" ><strong> $fieldname </strong></th>\n";
                    $i++;
                }

                //print out info for each field
                while($line=pg_fetch_array($genre_rating,null,PGSQL_ASSOC)){
                    echo"\t<tr>\n";
                    foreach($line as $col_value){
                        echo "\t\t<td>$col_value</td>\n";
                    }
                    echo "\t</tr>\n";
                }

    	    echo "</tbody>";
                echo "</table>\n";
    	    echo "</div>";
            }
/*
    $movie_query1 = 'CREATE VIEW actor1 AS WITH id_list AS (
            SELECT actor_in_movie.movie_id
            FROM actor_in_movie INNER JOIN actor ON (actor_in_movie.actor_id = actor.id) 
            WHERE actor.name = $1
            ) 
        SELECT title
        FROM movie INNER JOIN id_list ON (id_list.movie_id = movie.id)';

    pg_prepare($dbconn, 'view1', $movie_query1);
    $movie1 = pg_execute($dbconn, 'view1', array($actor));

    if(!$movie1){
        echo "Couldn't pull movie1 data";
    }
    $movie_query_actor2 = 'CREATE VIEW actor2 AS WITH id_list AS (
            SELECT actor_in_movie.movie_id
            FROM actor_in_movie INNER JOIN actor ON (actor_in_movie.actor_id = actor.id) 
            WHERE actor.name = 'Angelina Jolie'
            ) 
        SELECT title
        FROM movie INNER JOIN id_list ON (id_list.movie_id = movie.id)';
    pg_prepare($dbconn, 'view2', $movie_query2);
    $movie2 = pg_execute($dbconn, 'view2', array('Angelina Jolie'));
    if(!$movie2){
        echo "Couldn't pull movie2 data";
    }
    $view_query = 'SELECT DISTINCT ON ($1.title) $1.title FROM brad INNER JOIN angie ON ($1.title = $2.title)';

    pg_prepare($dbconn, 'collab', $view_query);
    $collaboration = pg_execute($dbcon, 'collab', array($movie1, $movie2));

    if(!$collaboration){
        echo "Couldn't pull collaboration data";
    }

*/
?>
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Search by Name</h3>
                </div>

                <!--allows user to search for actor name or part of actor name. sends searched value to actor_name.php as a GET variable.-->
                <form class="panel-body" role="search" method = "GET" action = actor_name.php>
                    <div class="input-group">
                        <input type="text" class="form-control" name = "substring" placeholder="Search">
                        <span class="input-group-btn"><button type="submit" class="btn btn-default">Search!</button></span>
                    </div>
                </form>
            </div>
        </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="templateStuff/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="templateStuff/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript
    <script src="templateStuff/js/plugins/morris/raphael.min.js"></script>
    <script src="templateStuff/js/plugins/morris/morris.min.js"></script>
    <script src="templateStuff/js/plugins/morris/morris-data.js"></script>
    -->

</body>

</html>
