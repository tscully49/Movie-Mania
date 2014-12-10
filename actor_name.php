<?php
    //get the substring/first letter of the actor's name from actors.php
    $substring = $_GET['substring'];

    include("../secure/database.php");
    $dbconn=pg_connect(HOST. " ".DBNAME." ".USERNAME." ".PASSWORD); // Connects to the database

    if(!$dbconn){
        echo"<p> Connection Fail</p>";
    }

    if (!ctype_alpha($substring)) {
        $new_string = "'^[0-9]'";
        $actor_query = "SELECT id,name FROM actor WHERE name ~ '^[0-9]' ORDER BY name ASC";

        pg_prepare($dbconn, 'actors', $actor_query);
        $actors = pg_execute($dbconn, 'actors', array());

        if(pg_num_rows($actors) == 0){
            pg_close($conn);
            header('Location: https://babbage.cs.missouri.edu/~cs3380f14grp12/Movie-Mania/no_result.php');
        }
    }
    else {
    //select any actors whose names start with the letter of the clicked button or contain the substring searched for in the actors search bar
    $actor_query = 'SELECT id,name FROM actor WHERE name ilike $1 ORDER BY name ASC';

        pg_prepare($dbconn, 'actors', $actor_query);
        $actors = pg_execute($dbconn, 'actors', array($substring."%"));

        //if no actors contained the substring, redirect to the no results page
        if(pg_num_rows($actors) == 0){
            pg_close($conn);
            header('Location: https://babbage.cs.missouri.edu/~cs3380f14grp12/Movie-Mania/no_result.php');
        }
    }
    ?>
    <?php
    require("menu.php");
    ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Actor Results
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
                            <i class="fa fa-info-circle"></i>  <strong>Select an Actor/Actress from the list</strong> Or search another Actor/Actress!                     
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <?php
                    echo"<div class=\"row\">";
                        echo "<div class=\"col-lg-3 btn-group btn-group-vertical\">";
                            echo "<div class=\"panel panel-default\">";
                                echo "<div class=\"panel-heading\">";
                                    echo "<h3 class=\"panel-title\"><i class=\"fa fa-tasks fa-fw\"></i><strong> Select Actor</strong></h3>";
                                echo "</div>";
                                echo "<div class=\"panel-body\">";
                          
                                    echo "<ul class=\"list-group actor_profile_trial\">";
                                        //for each returned row, display $line[1](actor's name), and send $line[0] as a GET variable called 'id' if clicked. 
                                        while($line=pg_fetch_array($actors,null,PGSQL_NUM)){
                                            echo "<a href=\"actors_profile_trial?id=$line[0]\"class=\"list-group-item btn-sm strong\">$line[1] </a>";
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
