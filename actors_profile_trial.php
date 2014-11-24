<!--Displays actor's profile, including filmography, genres of movies starred in, and success of movies based on genre-->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Movie-Mania</title>

    <!-- Bootstrap Core CSS -->
    <link href="templateStuff/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="templateStuff/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="templateStuff/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="templateStuff/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    	.navbar-header {
    		margin: 0 auto;
    		position: relative;
    	}
    	.bar {
    		margin-right: 2rem;
    		margin-left: 2rem;
    	}
    	.searchbar {
    		margin-left:7rem;
    	}
    	.strong {
    		font-weight: bold;
    		font-size: 1.5rem;
    	}
    	.movie_titles {
    		display: inline;
    	}
    </style>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Movie Mania</a>
            </div>
            <button type="button" class="btn btn-default navbar-btn navbar-right bar">Login</button>
		    <button type="button" class="btn btn-default navbar-btn navbar-right bar">Sign up</button>
            <form class="navbar-form navbar-left searchbar" role="search">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search">
		        </div>
		        <button type="submit" class="btn btn-default">Submit</button>
		    </form>
           
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
                    </li>
                    <li>
                        <a href="movies.php"><i class="fa fa-fw fa-film"></i> Movies</a>
                    </li>
                    <li>
                        <a href="actors.php"><i class="fa fa-fw fa-user"></i> Actors</a>
                    </li>
                    <li>
                        <a href="boxOffice.php"><i class="fa fa-fw fa-money"></i> Box Office</a>
                    </li>
                    <li>
                        <a href="error_page.php"><i class="fa fa-fw fa-calendar"></i> Year</a>
                    </li>
                    <li>
                        <a href="error_page.php"><i class="fa fa-fw fa-bar-chart-o"></i> Rating</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-video-camera"></i> Genre <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="genre.php?genre=Action/Adventure">Action/Adventure</a>
                            </li>
                            <li>
                                <a href="genre.php?genre=Comedy">Comedy</a>
                            </li>
                            <li>
                                <a href="genre.php?genre=Documentary">Documentary</a>
                            </li>
                            <li>
                                <a href="genre.php?genre=Drama">Drama</a>
                            </li>
                            <li>
                                <a href="genre.php?genre=Horror">Horror</a>
                            </li>
                            <li>
                                <a href="genre.php?genre=Romance">Romance</a>
                            </li>
                            <li>
                                <a href="genre.php?genre=Sci-Fi">Sci-Fi</a>
                            </li>
                            <li>
                                <a href="genre.php?genre=Thriller">Thriller</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="error_page.php"><i class="fa fa-fw fa-gears"></i> Statistics</a>
                    </li>
                    <li>
                        <a href="error_page.php"><i class="fa fa-fw fa-file"></i> About Us</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

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
                                <i class="fa fa-arrow-right"><span class="">Movies</span></i>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Search Actors/Actresses</strong> Search for Actors/Actresses                     
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <?php

    //connect to database
    $dbconn=pg_connect("host=dbhost-pgsql.cs.missouri.edu dbname=cs3380f14grp12 
        user=cs3380f14grp12 password=bpVhIe1A") 
    or die('Could not connect: ' . pg_last_error());

    session_start();
    //actor name from letter page
    $actor = $_SESSION['name'];

    $error_query = "SELECT name FROM actor WHERE name = $1";

    pg_prepare($dbconn, 'error', $error_query);
    $error_check = pg_execute($dbconn, 'error', array($actor));
    if(pg_num_rows($error_check) == 0){
        echo 'No results found!!! ';
        echo $actor;
    }
    else{
            echo $actor;
            echo '\'s Profile';

            echo "<br/>";
            echo "<br/>";   

            echo 'Movies Starred In:';
             //returns names of all the movies an actor was in
            $movie_query = 'WITH id_list AS (
                    SELECT actor_in_movie.movie_id
                    FROM actor_in_movie INNER JOIN actor ON (actor_in_movie.actor_id = actor.id) 
                    WHERE actor.name = $1
                    ) 
                SELECT title
                FROM movie INNER JOIN id_list ON (id_list.movie_id = movie.id)';


            pg_prepare($dbconn, 'movies', $movie_query);
            $movies = pg_execute($dbconn, 'movies', array($actor));

            //check that query was successful 
            if(!$movies){
                echo "Couldn't pull movie data";
            }

           
            
            //start table
            echo "<table border=\"1\">\n";
            
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
                echo "\t</tr>\n";
            }

            echo "</table>\n";

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
            
            echo "<br/>";
            echo "<br/>";   

            echo 'Number of Movies Starred in per Genre';
            //start table
            echo "<table border=\"1\">\n";
            
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

            echo "</table>\n";

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

            echo "<br/>";
            echo "<br/>";   
            echo 'Success of movies by genre <br/>';
            echo 'Measured by average Rotten Tomato Critic rating for each genre';
            
            //start table
            echo "<table border=\"1\">\n";
            
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

            echo "</table>\n";
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

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="templateStuff/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="templateStuff/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="templateStuff/js/plugins/morris/raphael.min.js"></script>
    <script src="templateStuff/js/plugins/morris/morris.min.js"></script>
    <script src="templateStuff/js/plugins/morris/morris-data.js"></script>

</body>

</html>
