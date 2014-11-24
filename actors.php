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
                                <a href="#">Action/Adventure</a>
                            </li>
                            <li>
                                <a href="#">Comedy</a>
                            </li>
                            <li>
                                <a href="#">Documentary</a>
                            </li>
                            <li>
                                <a href="#">Drama</a>
                            </li>
                            <li>
                                <a href="#">Horror</a>
                            </li>
                            <li>
                                <a href="#">Romance</a>
                            </li>
                            <li>
                                <a href="#">Sci-Fi</a>
                            </li>
                            <li>
                                <a href="#">Thriller</a>
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
                            Search any Actor or Actress in our Database! <small>The main actors in all of our movies!</small>
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

                <div class="row">
                    <div class="col-lg-3 btn-group btn-group-vertical">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-tasks fa-fw"></i><strong> Search by Last Name</strong></h3>
                            </div>
                            <div class="panel-body">
                            	<ul class="list-group actor_name">
                            		<a href="actor_name?letter=a" class="list-group-item btn-sm strong">A</a>
                            		<a href="actor_name?letter=b" class="list-group-item btn-sm strong">B</a>
                            		<a href="actor_name?letter=c" class="list-group-item btn-sm strong">C</a>
                            		<a href="actor_name?letter=d" class="list-group-item btn-sm strong">D</a>
                            		<a href="actor_name?letter=e" class="list-group-item btn-sm strong">E</a>
                            		<a href="actor_name?letter=f" class="list-group-item btn-sm strong">F</a>
                            		<a href="actor_name?letter=g" class="list-group-item btn-sm strong">G</a>
                            		<a href="actor_name?letter=h" class="list-group-item btn-sm strong">H</a>
                            		<a href="actor_name?letter=j" class="list-group-item btn-sm strong">I</a>
                            		<a href="actor_name?letter=j" class="list-group-item btn-sm strong">J</a>
                            		<a href="actor_name?letter=k" class="list-group-item btn-sm strong">K</a>
                            		<a href="actor_name?letter=l" class="list-group-item btn-sm strong">L</a>
                            		<a href="actor_name?letter=m" class="list-group-item btn-sm strong">M</a>
                            		<a href="actor_name?letter=n" class="list-group-item btn-sm strong">N</a>
                            		<a href="actor_name?letter=o" class="list-group-item btn-sm strong">O</a>
                            		<a href="actor_name?letter=p" class="list-group-item btn-sm strong">P</a>
                            		<a href="actor_name?letter=q" class="list-group-item btn-sm strong">Q</a>
                            		<a href="actor_name?letter=r" class="list-group-item btn-sm strong">R</a>
                            		<a href="actor_name?letter=s" class="list-group-item btn-sm strong">S</a>
                            		<a href="actor_name?letter=t" class="list-group-item btn-sm strong">T</a>
                            		<a href="actor_name?letter=u" class="list-group-item btn-sm strong">U</a>
                            		<a href="actor_name?letter=v" class="list-group-item btn-sm strong">V</a>
                            		<a href="actor_name?letter=w" class="list-group-item btn-sm strong">W</a>
                            		<a href="actor_name?letter=x" class="list-group-item btn-sm strong">X</a>
                            		<a href="actor_name?letter=y" class="list-group-item btn-sm strong">Y</a>
                            		<a href="actor_name?letter=z" class="list-group-item btn-sm strong">Z</a>
                            		<a href="actor_name?letter=#" class="list-group-item btn-sm strong">#</a>
                            	</ul>
                            	<div class="text-right">
                                    <a href="#">View All Movies <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i><strong> Search by Name</strong></h3>
                            </div>
                            <form class="panel-body" role="search">
                                <div class="form-group">
                                  <input type="text" class="form-control" placeholder="Search">
                                </div>
                                <button type="submit" class="btn btn-default pull-right">Search!</button>
                            </form>
                        </div>
                    </div>
                    <!-- Close the search bar div -->

                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Most Popular Actors</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                               <?PHP
                                                    include("actor_queries.php");
                                                    $num_fields = pg_num_fields($pop_actors);
                                                    for ($i=0;$i<$num_fields;$i++) { // Prints out all headers for the fields 
                                                        $fieldName = pg_field_name($pop_actors, $i);
                                                        echo "\t\t\n<th>$fieldName</th>"; 
                                                    }
                                                ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?PHP
                                            while ($popular_actors = pg_fetch_array($pop_actors, null, PGSQL_ASSOC)) {
                                                echo"<tr>";
                                                foreach($popular_actors as $col) { // Prints out all the info 
                                                    echo"\n\t\t<td>$col</td>";
                                                }
                                                echo"\n\t</tr>";
                                            }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-right">
                                    <a href="#">View Most Popular Actors<i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-lg-offset-5">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-film fa-fw"></i> Top Selling Movies</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Rank</th>
                                                <th>Order Date</th>
                                                <th>Title</th>
                                                <th>Amount (USD)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>10/21/2013</td>
                                                <td>Shawshank Redmeption</td>
                                                <td>$321.33</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>10/21/2013</td>
                                                <td>Avatar</td>
                                                <td>$234.34</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>10/21/2013</td>
                                                <td>Fast and Furious</td>
                                                <td>$724.17</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>10/21/2013</td>
                                                <td>Inception</td>
                                                <td>$23.71</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>10/21/2013</td>
                                                <td>Top Gun</td>
                                                <td>$8345.23</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>10/21/2013</td>
                                                <td>The Dark Knight</td>
                                                <td>$245.12</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>10/21/2013</td>
                                                <td>Step Brothers</td>
                                                <td>$5663.54</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>10/21/2013</td>
                                                <td>Forest Gump</td>
                                                <td>$943.45</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-right">
                                    <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
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

    <!-- Morris Charts JavaScript -->
    <script src="templateStuff/js/plugins/morris/raphael.min.js"></script>
    <script src="templateStuff/js/plugins/morris/morris.min.js"></script>
    <script src="templateStuff/js/plugins/morris/morris-data.js"></script>

</body>

</html>
