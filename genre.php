<?php
    require("menu.php");
?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Search any Movie by Genre! <small>The Genres for all of our movies!</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-arrow-right"><span class="">Movies</span></i>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Number of Movies in each Genre</h3>
                            </div>
                            <div class="panel-body">
                                <div class="flot-chart">
                                    <div class = "genre-container">
                                        <div id="genres"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Search Movies by Genre</strong> Pick a Genre on the left or select from the lists!                    
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                
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

                    <!-- Decides whether all the genres should be printed out or if just a single one should by checking the get parameters-->
                    <?PHP
                        require("php-funcs.php");
                        if ($_GET['genre']) {
                            print_single_genre($_GET['genre']);
                        }
                        else {
                           print_all_genres();
                        }
                    ?>
                    <!-- Prints out either all genres or just the specified one -->

                    <!--<div class="col-lg-4">
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
                                                    /*include("actor_queries.php");
                                                    $num_fields = pg_num_fields($pop_actors);
                                                    for ($i=0;$i<$num_fields;$i++) { // Prints out all headers for the fields 
                                                        $fieldName = pg_field_name($pop_actors, $i);
                                                        echo "\t\t\n<th>$fieldName</th>"; 
                                                    }*/
                                                ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?PHP
                                            /*while ($popular_actors = pg_fetch_array($pop_actors, null, PGSQL_ASSOC)) {
                                                echo"<tr>";
                                                foreach($popular_actors as $col) { // Prints out all the info 
                                                    echo"\n\t\t<td>$col</td>";
                                                }
                                                echo"\n\t</tr>";
                                            }*/
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-right">
                                    <a href="#">View Most Popular Actors<i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>-->
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

    <!--HighCharts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript" src="charts.js"></script>

</body>

</html>
