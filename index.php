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
            <form method = "POST" action = http://babbage.cs.missouri.edu/~cs3380f14grp12/Movie-Mania/decider.php class="navbar-form navbar-left searchbar" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" name='search' placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
		    </form>
            <!-- Top Menu Items -->
            <!--<ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>-->
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
                        <a href="actors.html"><i class="fa fa-fw fa-user"></i> Actors</a>
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
                             Welcome to Movie-Mania! <small>The Coolest Movie App Ever Made</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-home"></i> Home
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Quick Access</strong> Select a box below or search using the search bar                       
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-film fa-5x"></i>
                                    </div>
                                        <div class='col-xs-9 text-right'>
                                        <?PHP
                                            require("index_queries.php");
                                            echo"\n<div class='huge'>$num</div>";
                                        ?>
                                            <div>Movies</div>
                                        </div>
                                    <!--<div class="col-xs-9 text-right">
                                        <div class="huge">9234</div>
                                        <div>Movies</div>
                                    </div>-->
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Movies</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <?PHP
                                            echo"<div class='huge'>$num_actors2</div>";
                                        ?>
                                        <div>Actors/Actresses</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Actors/Actresses</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-calendar fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <?PHP
                                            echo"<div class='huge'>$num_years2</div>";
                                        ?>
                                        <div>Years</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Years</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-video-camera fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <?PHP
                                            echo"<div class='huge'>$num_genres2</div>";
                                        ?>
                                        <div>Genres</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Genres</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <!--<div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Area Chart</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-area-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>-->
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-tasks fa-fw"></i> Total Genres</h3>
                            </div>
                            <div class="panel-body">
                                 <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <?PHP
                                                    $num_fields = pg_num_fields($diff_genres);
                                                    for ($i=0;$i<$num_fields;$i++) { // Prints out all headers for the fields 
                                                        $fieldName = pg_field_name($diff_genres, $i);
                                                        echo "\t\t\n<th>$fieldName</th>"; 
                                                    }
                                                ?>
                                            </tr>
                                        </thead>
                                        <?PHP
                                            while ($all_genres = pg_fetch_array($diff_genres, null, PGSQL_ASSOC)) {
                                                echo"<tr>";
                                                foreach($all_genres as $col) { // Prints out all the info 
                                                    echo"\n\t\t<td>$col</td>";
                                                }
                                                echo"\n\t</tr>";
                                            }
                                        ?>
                                    </table>
                                </div>
                                <div class="text-right">
                                    <a href="#">View All Genres <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Box Office</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <span class="badge">$38053000</span>
                                        <i class="fa fa-fw fa-video-camera"></i> 
                                        <?PHP
                                            echo $new['movies'][0]['title'];
                                        ?>
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
                    <div class="col-lg-5">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-film fa-fw"></i> Top Selling Movies</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                               <?PHP
                                                    $num_fields = pg_num_fields($box_office_query);
                                                    for ($i=0;$i<$num_fields;$i++) { // Prints out all headers for the fields 
                                                        $fieldName = pg_field_name($box_office_query, $i);
                                                        echo "\t\t\n<th>$fieldName</th>"; 
                                                    }
                                                ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?PHP
                                            while ($all_box_office = pg_fetch_array($box_office_query, null, PGSQL_ASSOC)) {
                                                echo"<tr>";
                                                foreach($all_box_office as $col) { // Prints out all the info 
                                                    echo"\n\t\t<td>$col</td>";
                                                }
                                                echo"\n\t</tr>";
                                            }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-right">
                                    <a href="#">View Box Office <i class="fa fa-arrow-circle-right"></i></a>
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
