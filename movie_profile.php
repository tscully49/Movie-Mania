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
	.table{
		width: 400px;
	}
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
                        <a href="error_page.php"><i class="fa fa-fw fa-calendar"></i> Year</a>
                    </li>
                    <li>
                        <a href="error_page.php"><i class="fa fa-fw fa-bar-chart-o"></i> Rating</a>
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
                            Movie Profile
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-arrow-right"><span class="">Movies</span></i>
                            </li>
                        </ol>
                    </div>
                </div>
                <!--/.row -->


<?php
        
       
	   
	   $conn = pg_connect("host=dbhost-pgsql.cs.missouri.edu dbname=cs3380f14grp12 user=cs3380f14grp12 password=bpVhIe1A");
	   $id = $_GET['id'];
           $query1 = "SELECT DISTINCT ON (title) * FROM movie WHERE (id = $1)";
           pg_prepare($conn,"titlesearch",$query1);
           $result1 = pg_execute($conn,"titlesearch",array($id));

           $movie_title = pg_fetch_array($result1,null,PGSQL_NUM);
           $title = $movie_title[1];

           echo "<h3>About <u><strong>$title</strong></u></h3>";

            $query2 = "SELECT DISTINCT ON (title) * FROM movie WHERE (id = $1)";
           pg_prepare($conn,"titlesearch",$query2);
           $result2 = pg_execute($conn,"titlesearch",array($id));
	  
           echo "<table class='table table-striped'>";
	   echo "<tbody>";
	  
	    $i=0;
            while($line = pg_fetch_array($result2,null,PGSQL_ASSOC)){
                foreach($line as $col_value){
    		        $fieldname=pg_field_name($result2,$i);
                    switch ($fieldname) {
                        case 'mpaa_rating': {
                            echo "\t\t<tr><td>MPAA Rating</td><td>$col_value</td></tr>\n";
                            break;
                        }
                        case "release_date": {
                            echo "\t\t<tr><td>Release Date</td><td>$col_value</td></tr>\n";
                            break;
                        }
                        case "domestic_gross": {
                            echo "\t\t<tr><td>Domestic Gross</td><td>$col_value</td></tr>\n";
                            break;
                        }
                        case "rt_critic": {
                            echo "\t\t<tr><td>Critic Rating</td><td>$col_value</td></tr>\n";
                            break;
                        }
                        case "rt_audience": {
                            echo "\t\t<tr><td>Audience Rating</td><td>$col_value</td></tr>\n";
                            break;
                        }
                        case "imdb": {
                            echo "\t\t<tr><td>IMDB Rating</td><td>$col_value</td></tr>\n";
                            break;
                        }
                        default {
                           echo "\t\t<tr><td>$fieldname</td><td>$col_value</td></tr>\n";
                           break;
                        }
                    }
                    $i=$i+1;
		        }
            }    

	   echo "</tbody>\n";
           echo "</table>\n";


           pg_free_result($result1);

           pg_close($conn);
        

?>

<?php
   if(isset($_POST['search'])){
           $title = $_POST['title2'];
           echo "About $title";
           $conn = pg_connect("host=dbhost-pgsql.cs.missouri.edu dbname=cs3380f14grp12 user=cs3380f14grp12 password=bpVhIe1A");

           $query1 = "SELECT DISTINCT ON (title) * FROM movie WHERE (title = $1)";
           pg_prepare($conn,"titlesearch",$query1);
           $result1 = pg_execute($conn,"titlesearch",array($title));

           echo "<table class='table table-striped'>";
           echo "<tbody>";

           $i=0;
           while($line = pg_fetch_array($result1,null,PGSQL_ASSOC)){
                foreach($line as $col_value){
                    $fieldname = pg_field_name($result1, $i);
                    if ($fieldname == 'mpaa_rating') {
                        echo "\t\t<tr><td>MPAA Rating</td><td>$col_value</td></tr>\n";
                    }
                    if ($fieldname == "release_date") {
                        echo "\t\t<tr><td>Release Date</td><td>$col_value</td></tr>\n";
                    }
                    if ($fieldname == "domestic_gross") {
                        echo "\t\t<tr><td>Domestic Gross</td><td>$col_value</td></tr>\n";
                    }
                    if ($fieldname == "rt_critic") {
                        echo "\t\t<tr><td>Critic Rating</td><td>$col_value</td></tr>\n";
                    }
                    if ($fieldname == "rt_audience") {
                        echo "\t\t<tr><td>Audience Rating</td><td>$col_value</td></tr>\n";
                    }
                    if ($fieldname == "imdb") {
                        echo "\t\t<tr><td>IMDB Rating</td><td>$col_value</td></tr>\n";
                    }
                    else {
                       echo "\t\t<tr><td>$fieldname</td><td>$col_value</td></tr>\n";
                    }
                    $i=$i+1;
                }
           }

           echo "</tbody>\n";
           echo "</table>\n";


           pg_free_result($result1);

           pg_close($conn);
  }
?>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i><strong> Search by Name</strong></h3>
                            </div>

                             <!--allows user to search for movie title or part of movie title. sends searched value to movie_name.php as a GET variable.-->
                            <form class="panel-body" role="search" method = "GET" action = movie_name.php>
                                <div class="input-group">
                                    <input type="text" class="form-control" name = "substring" placeholder="Search">
                                    <span class="input-group-btn"><button type="submit" class="btn btn-default">Search!</button></span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Close the search bar div -->

                    <!--<div class="col-lg-3 btn-group btn-group-vertical">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-tasks fa-fw"></i><strong> Search by First Letter</strong></h3>
                            </div>
                            <div class="panel-body">
                            	<ul class="list-group movie_titles">
                            		<a href="/movie_titles?letter=a" class="list-group-item btn-sm strong">A</a>
                            		<a href="/movie_titles?letter=b" class="list-group-item btn-sm strong">B</a>
                            		<a href="/movie_titles?letter=c" class="list-group-item btn-sm strong">C</a>
                            		<a href="/movie_titles?letter=d" class="list-group-item btn-sm strong">D</a>
                            		<a href="/movie_titles?letter=e" class="list-group-item btn-sm strong">E</a>
                            		<a href="/movie_titles?letter=f" class="list-group-item btn-sm strong">F</a>
                            		<a href="/movie_titles?letter=g" class="list-group-item btn-sm strong">G</a>
                            		<a href="/movie_titles?letter=h" class="list-group-item btn-sm strong">H</a>
                            		<a href="/movie_titles?letter=j" class="list-group-item btn-sm strong">I</a>
                            		<a href="/movie_titles?letter=j" class="list-group-item btn-sm strong">J</a>
                            		<a href="/movie_titles?letter=k" class="list-group-item btn-sm strong">K</a>
                            		<a href="/movie_titles?letter=l" class="list-group-item btn-sm strong">L</a>
                            		<a href="/movie_titles?letter=m" class="list-group-item btn-sm strong">M</a>
                            		<a href="/movie_titles?letter=n" class="list-group-item btn-sm strong">N</a>
                            		<a href="/movie_titles?letter=o" class="list-group-item btn-sm strong">O</a>
                            		<a href="/movie_titles?letter=p" class="list-group-item btn-sm strong">P</a>
                            		<a href="/movie_titles?letter=q" class="list-group-item btn-sm strong">Q</a>
                            		<a href="/movie_titles?letter=r" class="list-group-item btn-sm strong">R</a>
                            		<a href="/movie_titles?letter=s" class="list-group-item btn-sm strong">S</a>
                            		<a href="/movie_titles?letter=t" class="list-group-item btn-sm strong">T</a>
                            		<a href="/movie_titles?letter=u" class="list-group-item btn-sm strong">U</a>
                            		<a href="/movie_titles?letter=v" class="list-group-item btn-sm strong">V</a>
                            		<a href="/movie_titles?letter=w" class="list-group-item btn-sm strong">W</a>
                            		<a href="/movie_titles?letter=x" class="list-group-item btn-sm strong">X</a>
                            		<a href="/movie_titles?letter=y" class="list-group-item btn-sm strong">Y</a>
                            		<a href="/movie_titles?letter=z" class="list-group-item btn-sm strong">Z</a>
                            		<a href="/movie_titles?letter=#" class="list-group-item btn-sm strong">#</a>
                            	</ul>
                            	<div class="text-right">
                                    <a href="#">View All Movies <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

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
