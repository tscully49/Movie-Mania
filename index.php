<?php
    require("menu.php");
?>
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
                            <a href="movies.php">
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
                            <a href="actors.php">
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
                            <a href="years.php">
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
                            <a href="genre.php">
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
                                <h3 class="panel-title"><i class="fa fa-tasks fa-fw"></i> <strong>Total Genres</strong></h3>
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
                                    <a href="genre.php">View All Genres <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-film fa-fw"></i><strong> Now Showing </strong>(In Order of Earnings)</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <?PHP
                                        foreach($new['movies'] as $obj) {
                                            echo"<a href='#' class='list-group-item'>";
                                            echo"<span class='badge'>Viewer Rating: " . $obj['ratings']['audience_score'] . "</span>";
                                            echo"<i class='fa fa-fw fa-video-camera'></i>"; 
                                            echo $obj['title'];
                                            echo"</a>";
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> <strong>Top Selling Movies</strong></h3>
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
                                    <a href="boxOffice.php">View Box Office <i class="fa fa-arrow-circle-right"></i></a>
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
