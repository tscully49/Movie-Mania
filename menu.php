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
        .movie_titles {
            display: inline;
        }
        #table1{
            float: left;
        }
        #table2{
            float: left;
            padding: 0 14px;
        }
        #table3{
            float: left;
        }
        .strong {
            font-weight: bold;
            font-size: 1.5rem;
        }
        td {
            white-space: nowrap;
        }
        #this {
            white-space: pre-wrap;
        }
        a {
            margin: 0px;
            padding: 0px;
        }
        #this-one {
            width: 100%;
            text-align: left;
        }
        tr td {
            margin: auto;
            padding: 0px;
        }
        #this_thing{
            padding: 0px;
            vertical-align: middle;
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
            <!--<button type="button" class="btn btn-default navbar-btn navbar-right bar">Login</button>
            <button type="button" class="btn btn-default navbar-btn navbar-right bar">Sign up</button>-->

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
                    <!--<li>
                        <a href="error_page.php"><i class="fa fa-fw fa-gears"></i> Statistics</a>
                    </li>
                    <li>
                        <a href="error_page.php"><i class="fa fa-fw fa-file"></i> About Us</a>
                    </li>-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>