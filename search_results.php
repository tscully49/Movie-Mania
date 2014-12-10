<!DOCTYPE html>
<html lang="en">

<head>
<?php
    //get substring that user searched for
    $substring = $_GET['substring'];

    include("../secure/database.php");
    $dbconn=pg_connect(HOST. " ".DBNAME." ".USERNAME." ".PASSWORD); // Connects to the database

    if(!$dbconn){
        echo"<p> Connection Fail</p>";
    }

    //select the name and id of any actor name that contains the substring
    $actor_query = 'SELECT id,name FROM actor WHERE name ilike $1';
    pg_prepare($dbconn, 'actors', $actor_query);
    $actors = pg_execute($dbconn, 'actors', array($substring."%"));

    //select the name and id of any movie title that contains the substring
    $movie_query = 'SELECT id,title FROM movie WHERE title ilike $1';
    pg_prepare($dbconn, 'movies', $movie_query);
    $movies = pg_execute($dbconn, 'movies', array($substring."%"));

    //if no movies and no actor names contained the substring, redirect to the no results page 
    if(pg_num_rows($actors) == 0 && pg_num_rows($movies) == 0){
        
        header('Location: https://babbage.cs.missouri.edu/~cs3380f14grp12/Movie-Mania/no_result.php');
    }
    ?>

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

             <!--allows user to search for a movie/actor name, or part of a movie/actor name-->
            <form method = "GET" action = search_results.php class="navbar-form navbar-left searchbar" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" name='substring' placeholder="Search">
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
                        <a href="years.php"><i class="fa fa-fw fa-calendar"></i> Year</a>
                    </li>
                    <li>
                        <a href="rating.php"><i class="fa fa-fw fa-bar-chart-o"></i> Rating</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-video-camera"></i> Genre <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse pre-scrollable">
                            <li>
                                <a href="genre.php">All Genres</a>
                            </li>
                            <li>
                                <a href="genre.php?genre=Action">Action</a>
                            </li>
                            <li>
                                <a href="genre.php?genre=Adventure">Adventure</a>
                            </li>
                            <li>
                                <a href="genre.php?genre=Animation">Animation</a>
                            </li>
                            <li>
                                <a href="genre.php?genre=Biography">Biography</a>
                            </li>
                            <li>
                                <a href="genre.php?genre=Comedy">Comedy</a>
                            </li>
                            <li>
                                <a href="genre.php?genre=Crime">Crime</a>
                            </li>
                            <li>
                                <a href="genre.php?genre=Documentary">Documentary</a>
                            </li>
                            <li>
                                <a href="genre.php?genre=Drama">Drama</a>
                            </li>
                            <li>
                                <a href="genre.php?genre=Fantasy">Fantasy</a>
                            </li>
                            <li>
                                <a href="genre.php?genre=Film-Noir">Film-Noir</a>
                            </li>
                            <li>
                                <a href="genre.php?genre=History">History</a>
                            </li>
                            <li>
                                <a href="genre.php?genre=Horror">Horror</a>
                            </li>
                            <li>
                                <a href="genre.php?genre=Music">Music</a>
                            </li>
                            <li>
                                <a href="genre.php?genre=Musical">Musical</a>
                            </li>
                            <li>
                                <a href="genre.php?genre=Mystery">Mystery</a>
                            </li>
                            <li>
                                <a href="genre.php?genre=Romance">Romance</a>
                            </li>
                            <li>
                                <a href="genre.php?genre=Sci-Fi">Sci-Fi</a>
                            </li>
                            <li>
                                <a href="genre.php?genre=Sports">Sports</a>
                            </li>
                            <li>
                                <a href="genre.php?genre=Thriller">Thriller</a>
                            </li>
                            <li>
                                <a href="genre.php?genre=War">War</a>
                            </li>
                            <li>
                                <a href="genre.php?genre=Western">Western</a>
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
                            Search Results
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-arrow-right"><span class="">Movies/Actors</span></i>
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
                    echo"<div class=\"row\">";
                        echo "<div class=\"col-lg-3 btn-group btn-group-vertical\">";
                            echo "<div class=\"panel panel-default\">";
                                echo "<div class=\"panel-heading\">";
                                    echo "<h3 class=\"panel-title\"><i class=\"fa fa-tasks fa-fw\"></i><strong> Select Movie or Actor</strong></h3>";
                                echo "</div>";
                                echo "<div class=\"panel-body\">";
                                    echo "<ul class=\"list-group actor_profile_trial\">";

                                        //print out buttons for each actor name that contained the substring
                                        while($line=pg_fetch_array($actors,null,PGSQL_NUM)){
                                           
                                           //$line[1] is the actor's name. If clicked, send $line[0] (the actor's id) as a GET variable to the actor profile page.
                                           echo "<a href=\"actors_profile_trial?id=$line[0]\"class=\"list-group-item btn-sm strong\">$line[1] </a>";
                                        }
                                        
                                        //print out buttons for each movie title that contained the substring
                                        while($line2=pg_fetch_array($movies,null,PGSQL_NUM)){
                                           
                                           //$line[1] is the movie's title. If clicked, send $line[0] (the movies's id) as a GET variable to the movie profile page.
                                            echo "<a href=\"movie_profile?id=$line2[0]\"class=\"list-group-item btn-sm strong\">$line2[1] </a>";
                                        }

                                echo "</ul>";
                                echo "<div class=\"text-right\">";  
                         echo "</div>";
                       echo "</div>";
                    echo "</div>";
                           

               
                ?>

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
