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
                    <div class="col-lg-4">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Donut Chart Example</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-donut-chart"></div>
                                <div class="text-right">
                                    <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Bar Graph Example</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-bar-chart"></div>
                                <div class="text-right">
                                    <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Bar Graph with Tooltips</h3>
                            </div>
                            <div class="panel-body">
                                <div class="flot-chart">
                                    <div class="flot-chart-content" id="flot-bar-chart"></div>
                                </div>
                                <div class="text-right">
                                    <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-lg-offset-5">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Box Office</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <span class="badge">$38053000</span>
                                        <i class="fa fa-fw fa-video-camera"></i> Dumb and Dumber To
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">$36010000 </span>
                                        <i class="fa fa-fw fa-video-camera"></i> Big Hero 6
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">$29190000</span>
                                        <i class="fa fa-fw fa-video-camera"></i> Interstellar
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">$6500000</span>
                                        <i class="fa fa-fw fa-video-camera"></i> Beyond the Lights
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">$4625000</span>
                                        <i class="fa fa-fw fa-video-camera"></i> Gone Girl
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">$4025000</span>
                                        <i class="fa fa-fw fa-video-camera"></i> St. Vincent
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">$3810000</span>
                                        <i class="fa fa-fw fa-video-camera"></i> Fury (2014)
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">$3038000</span>
                                        <i class="fa fa-fw fa-video-camera"></i> Nightcrawler"
                                    </a>
                                </div>
                                <div class="text-right">
                                    <a href="#">View Box Office <i class="fa fa-arrow-circle-right"></i></a>
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
