<?php
    //get substring that user searched for
    $substring = $_GET['substring'];

    include("../secure/database.php");
    $dbconn=pg_connect(HOST. " ".DBNAME." ".USERNAME." ".PASSWORD); // Connects to the database

    if(!$dbconn){
        echo"<p> Connection Fail</p>";
    }

    //select the name and id of any actor name that contains the substring
    $actor_query = 'SELECT id,name FROM actor WHERE name ilike $1';
    pg_prepare($dbconn, 'actors', $actor_query);
    $actors = pg_execute($dbconn, 'actors', array($substring."%"));

    //select the name and id of any movie title that contains the substring
    $movie_query = 'SELECT id,title FROM movie WHERE title ilike $1';
    pg_prepare($dbconn, 'movies', $movie_query);
    $movies = pg_execute($dbconn, 'movies', array($substring."%"));

    //if no movies and no actor names contained the substring, redirect to the no results page 
    if(pg_num_rows($actors) == 0 && pg_num_rows($movies) == 0){
        
        header('Location: https://babbage.cs.missouri.edu/~cs3380f14grp12/Movie-Mania/no_result.php');
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
                            Search Results
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-arrow-right"><span class="">Movies/Actors</span></i>
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

                <?php
                    echo"<div class=\"row\">";
                        echo "<div class=\"col-lg-3 btn-group btn-group-vertical\">";
                            echo "<div class=\"panel panel-default\">";
                                echo "<div class=\"panel-heading\">";
                                    echo "<h3 class=\"panel-title\"><i class=\"fa fa-tasks fa-fw\"></i><strong> Select Movie or Actor</strong></h3>";
                                echo "</div>";
                                echo "<div class=\"panel-body\">";
                                    echo "<ul class=\"list-group actor_profile_trial\">";

                                        //print out buttons for each actor name that contained the substring
                                        while($line=pg_fetch_array($actors,null,PGSQL_NUM)){
                                           
                                           //$line[1] is the actor's name. If clicked, send $line[0] (the actor's id) as a GET variable to the actor profile page.
                                           echo "<a href=\"actors_profile_trial?id=$line[0]\"class=\"list-group-item btn-sm strong\">$line[1] </a>";
                                        }
                                        
                                        //print out buttons for each movie title that contained the substring
                                        while($line2=pg_fetch_array($movies,null,PGSQL_NUM)){
                                           
                                           //$line[1] is the movie's title. If clicked, send $line[0] (the movies's id) as a GET variable to the movie profile page.
                                            echo "<a href=\"movie_profile?id=$line2[0]\"class=\"list-group-item btn-sm strong\">$line2[1] </a>";
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
