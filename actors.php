<?php
    require("menu.php");
    ?>

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
                                <i class="fa fa-arrow-right"><span class="">Actors</span></i>
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
                                <h3 class="panel-title"><i class="fa fa-tasks fa-fw"></i><strong> Search by First Name</strong></h3>
                            </div>
                            <div class="panel-body">
                            	<ul class="list-group actor_name">
                                    <!--send the letter as a get variable called 'substring' to actor_name.php if clicked-->
                            		<a href="actor_name?substring=a" class="list-group-item btn-sm strong">A</a>
                            		<a href="actor_name?substring=b" class="list-group-item btn-sm strong">B</a>
                            		<a href="actor_name?substring=c" class="list-group-item btn-sm strong">C</a>
                            		<a href="actor_name?substring=d" class="list-group-item btn-sm strong">D</a>
                            		<a href="actor_name?substring=e" class="list-group-item btn-sm strong">E</a>
                            		<a href="actor_name?substring=f" class="list-group-item btn-sm strong">F</a>
                            		<a href="actor_name?substring=g" class="list-group-item btn-sm strong">G</a>
                            		<a href="actor_name?substring=h" class="list-group-item btn-sm strong">H</a>
                            		<a href="actor_name?substring=i" class="list-group-item btn-sm strong">I</a>
                            		<a href="actor_name?substring=j" class="list-group-item btn-sm strong">J</a>
                            		<a href="actor_name?substring=k" class="list-group-item btn-sm strong">K</a>
                            		<a href="actor_name?substring=l" class="list-group-item btn-sm strong">L</a>
                            		<a href="actor_name?substring=m" class="list-group-item btn-sm strong">M</a>
                            		<a href="actor_name?substring=n" class="list-group-item btn-sm strong">N</a>
                            		<a href="actor_name?substring=o" class="list-group-item btn-sm strong">O</a>
                            		<a href="actor_name?substring=p" class="list-group-item btn-sm strong">P</a>
                            		<a href="actor_name?substring=q" class="list-group-item btn-sm strong">Q</a>
                            		<a href="actor_name?substring=r" class="list-group-item btn-sm strong">R</a>
                            		<a href="actor_name?substring=s" class="list-group-item btn-sm strong">S</a>
                            		<a href="actor_name?substring=t" class="list-group-item btn-sm strong">T</a>
                            		<a href="actor_name?substring=u" class="list-group-item btn-sm strong">U</a>
                            		<a href="actor_name?substring=v" class="list-group-item btn-sm strong">V</a>
                            		<a href="actor_name?substring=w" class="list-group-item btn-sm strong">W</a>
                            		<a href="actor_name?substring=x" class="list-group-item btn-sm strong">X</a>
                            		<a href="actor_name?substring=y" class="list-group-item btn-sm strong">Y</a>
                            		<a href="actor_name?substring=z" class="list-group-item btn-sm strong">Z</a>
                            		<a href="actor_name?substring=#" class="list-group-item btn-sm strong">#</a>
                            	</ul>
                            	<div class="text-right">
                                    <a href="actor_name?substring=">View All Actors <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i><strong> Search by Name</strong></h3>
                            </div>

                            <!--allows user to search for actor name or part of actor name. sends searched value to actor_name.php as a GET variable.-->
                            <form class="panel-body" role="search" method = "GET" action = actor_name.php>
                                <div class="input-group">
                                    <input type="text" class="form-control" name = "substring" placeholder="Search">
                                    <span class="input-group-btn"><button type="submit" class="btn btn-default">Search!</button></span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Close the search bar div -->
                    <!-- Close the search bar div -->

                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> <strong>Most Popular Actors</strong></h3>
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
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> <strong>Most Popular Directors</strong></h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                               <?PHP
                                                    $num_fields = pg_num_fields($pop_directors);
                                                    for ($i=0;$i<$num_fields;$i++) { // Prints out all headers for the fields 
                                                        $fieldName = pg_field_name($pop_directors, $i);
                                                        echo "\t\t\n<th>$fieldName</th>"; 
                                                    }
                                                ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?PHP
                                            while ($popular_directors = pg_fetch_array($pop_directors, null, PGSQL_ASSOC)) {
                                                echo"<tr>";
                                                foreach($popular_directors as $col) { // Prints out all the info 
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
