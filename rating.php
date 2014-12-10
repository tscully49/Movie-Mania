<?php
    require("menu.php");
?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Ratings <small>Some anaysis from Ratings</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-arrow-right"><span class="">Ratings</span></i>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Check out some stats about Ratings</strong> Some info about Ratings                     
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-tasks fa-fw"></i> <strong>Average Ratings by Genre</strong></h3>
                            </div>
                            <div class="panel-body">
                                 <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <?PHP
                                                    require("ratings_queries.php");
                                                    $num_fields = pg_num_fields($result1);
                                                    for ($i=0;$i<$num_fields;$i++) { // Prints out all headers for the fields 
                                                        $fieldName = pg_field_name($result1, $i);
                                                        echo "\t\t\n<th>$fieldName</th>"; 
                                                    }
                                                ?>
                                            </tr>
                                        </thead>
                                        <?PHP
                                            while ($all_genres = pg_fetch_array($result1, null, PGSQL_ASSOC)) {
                                                echo"<tr>";
                                                foreach($all_genres as $col) { // Prints out all the info 
                                                    echo"\n\t\t<td>$col</td>";
                                                }
                                                echo"\n\t</tr>";
                                            }
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-tasks fa-fw"></i> <strong>Average Ratings by Gross</strong></h3>
                            </div>
                            <div class="panel-body">
                                 <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <?PHP
                                                    require("ratings_queries.php");
                                                    $num_fields = pg_num_fields($result5);
                                                    for ($i=0;$i<$num_fields;$i++) { // Prints out all headers for the fields 
                                                        $fieldName = pg_field_name($result5, $i);
                                                        echo "\t\t\n<th>$fieldName</th>"; 
                                                    }
                                                ?>
                                            </tr>
                                        </thead>
                                        <?PHP
                                            while ($all_genres = pg_fetch_array($result5, null, PGSQL_ASSOC)) {
                                                echo"<tr>";
                                                foreach($all_genres as $col) { // Prints out all the info 
                                                    echo"\n\t\t<td>$col</td>";
                                                }
                                                echo"\n\t</tr>";
                                            }
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-tasks fa-fw"></i> <strong>Average Ratings by MPAA Rating</strong></h3>
                            </div>
                            <div class="panel-body">
                                 <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <?PHP
                                                    require("ratings_queries.php");
                                                    $num_fields = pg_num_fields($result6);
                                                    for ($i=0;$i<$num_fields;$i++) { // Prints out all headers for the fields 
                                                        $fieldName = pg_field_name($result6, $i);
                                                        echo "\t\t\n<th>$fieldName</th>"; 
                                                    }
                                                ?>
                                            </tr>
                                        </thead>
                                        <?PHP
                                            while ($all_genres = pg_fetch_array($result6, null, PGSQL_ASSOC)) {
                                                echo"<tr>";
                                                foreach($all_genres as $col) { // Prints out all the info 
                                                    echo"\n\t\t<td>$col</td>";
                                                }
                                                echo"\n\t</tr>";
                                            }
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                    <!-- MAKE A GRAPH THAT SHOWS TOTAL GROSS BY EACH YEAR -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-tasks fa-fw"></i> <strong>Average Ratings by Year</strong></h3>
                            </div>
                            <div class="panel-body">
                                 <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <?PHP
                                                    require("ratings_queries.php");
                                                    $num_fields = pg_num_fields($result2);
                                                    for ($i=0;$i<$num_fields;$i++) { // Prints out all headers for the fields 
                                                        $fieldName = pg_field_name($result2, $i);
                                                        echo "\t\t\n<th>$fieldName</th>"; 
                                                    }
                                                ?>
                                            </tr>
                                        </thead>
                                        <?PHP
                                            while ($all_years = pg_fetch_array($result2, null, PGSQL_ASSOC)) {
                                                echo"<tr>";
                                                foreach($all_years as $col) { // Prints out all the info 
                                                    echo"\n\t\t<td>$col</td>";
                                                }
                                                echo"\n\t</tr>";
                                            }
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-lg-4">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-tasks fa-fw"></i> <strong>Average Ratings by Director</strong></h3>
                            </div>
                            <div class="panel-body">
                                 <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <?PHP
                                                    require("ratings_queries.php");
                                                    $num_fields = pg_num_fields($result3);
                                                    for ($i=0;$i<$num_fields;$i++) { // Prints out all headers for the fields 
                                                        $fieldName = pg_field_name($result3, $i);
                                                        echo "\t\t\n<th>$fieldName</th>"; 
                                                    }
                                                ?>
                                            </tr>
                                        </thead>
                                        <?PHP
                                            while ($all_genres = pg_fetch_array($result3, null, PGSQL_ASSOC)) {
                                                echo"<tr>";
                                                foreach($all_genres as $col) { // Prints out all the info 
                                                    echo"\n\t\t<td>$col</td>";
                                                }
                                                echo"\n\t</tr>";
                                            }
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-tasks fa-fw"></i> <strong>Average Ratings by Actor</strong></h3>
                            </div>
                            <div class="panel-body">
                                 <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <?PHP
                                                    require("ratings_queries.php");
                                                    $num_fields = pg_num_fields($result4);
                                                    for ($i=0;$i<$num_fields;$i++) { // Prints out all headers for the fields 
                                                        $fieldName = pg_field_name($result4, $i);
                                                        echo "\t\t\n<th>$fieldName</th>"; 
                                                    }
                                                ?>
                                            </tr>
                                        </thead>
                                        <?PHP
                                            while ($all_genres = pg_fetch_array($result4, null, PGSQL_ASSOC)) {
                                                echo"<tr>";
                                                foreach($all_genres as $col) { // Prints out all the info 
                                                    echo"\n\t\t<td>$col</td>";
                                                }
                                                echo"\n\t</tr>";
                                            }
                                        ?>
                                    </table>
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

      <!--HighCharts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>

    <script type="text/javascript" src="charts.js"></script>

</body>

</html>
