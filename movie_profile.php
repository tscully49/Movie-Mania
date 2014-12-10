<?php
    require("menu.php");
    ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Movie Profile
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-arrow-right"><span class="">Movies</span></i>
                            </li>
                        </ol>
                    </div>
                </div>
                <!--/.row -->

                <div class="col-lg-6">
<?php
        
       
	   
	    include("../secure/database.php");
        $conn=pg_connect(HOST. " ".DBNAME." ".USERNAME." ".PASSWORD); // Connects to the database

        if(!$conn){
            echo"<p> Connection Fail</p>";
        }

	   $id = $_GET['id'];
           $query1 = "SELECT DISTINCT ON (title) * FROM movie WHERE (id = $1)";
           pg_prepare($conn,"titlesearch",$query1);
           $result1 = pg_execute($conn,"titlesearch",array($id));

           $movie_title = pg_fetch_array($result1,null,PGSQL_NUM);
           $title = $movie_title[1];

           echo "<h3>About <u><strong>$title</strong></u></h3>";

            $query2 = "SELECT DISTINCT ON (title) * FROM movie WHERE (id = $1)";
           pg_prepare($conn,"titlesearch",$query2);
           $result2 = pg_execute($conn,"titlesearch",array($id));
	  
           echo "<table class='table table-striped'>";
	   echo "<tbody>";
	  
	    $i=0;
            while($line = pg_fetch_array($result2,null,PGSQL_ASSOC)){
                foreach($line as $col_value){
    		        $fieldname=pg_field_name($result2,$i);
                    switch ($fieldname) {
                        case 'mpaa_rating': {
                            echo "\t\t<tr><td>MPAA Rating</td><td><strong>$col_value</strong></td></tr>\n";
                            break;
                        }
                        case "release_date": {
                            echo "\t\t<tr><td>Release Date</td><td><strong>$col_value</strong></td></tr>\n";
                            break;
                        }
                        case "domestic_gross": {
                            echo "\t\t<tr><td>Domestic Gross</td><td><strong>$col_value</strong></td></tr>\n";
                            break;
                        }
                        case "rt_critic": {
                            echo "\t\t<tr><td>Critic Rating</td><td><strong>$col_value</strong></td></tr>\n";
                            break;
                        }
                        case "rt_audience": {
                            echo "\t\t<tr><td>Audience Rating</td><td><strong>$col_value</strong></td></tr>\n";
                            break;
                        }
                        case "imdb": {
                            echo "\t\t<tr><td>IMDB Rating</td><td><strong>$col_value</strong></td></tr>\n";
                            break;
                        }
                        case "runtime": {
                            echo "\t\t<tr><td>Runtime (min)</td><td><strong>$col_value</strong></td></tr>\n";
                            break;
                        }
                        case "id": {
                            echo "\t\t<tr><td>Movie ID</td><td><strong>$col_value</strong></td></tr>\n";
                            break;
                        }
                        case "metascore": {
                            echo "\t\t<tr><td>Metascore</td><td><strong>$col_value</strong></td></tr>\n";
                            break;
                        }
                        case "title": {
                            echo "\t\t<tr><td>Title</td><td><strong>$col_value</strong></td></tr>\n";
                            break;
                        }
                        case "year": {
                            echo "\t\t<tr><td>Year</td><td><strong>$col_value</strong></td></tr>\n";
                            break;
                        }
                        case "plot": {
                            echo "\t\t<tr><td>Movie Plot</td><td id='this'><strong>$col_value</strong></td></tr>\n";
                            break;
                        }
                        default : {
                           echo "\t\t<tr><td>$fieldname</td><td><strong>$col_value</strong></td></tr>\n";
                           break;
                        }
                    }
                    $i=$i+1;
		        }
            }    

	   echo "</tbody>\n";
           echo "</table>\n";


           pg_free_result($result1);

           pg_close($conn);
        

?>

<?php
   if(isset($_POST['search'])){
           $title = $_POST['title2'];
           echo "About $title";
           include("../secure/database.php");
            $conn=pg_connect(HOST. " ".DBNAME." ".USERNAME." ".PASSWORD); // Connects to the database

            if(!$conn){
                echo"<p> Connection Fail</p>";
            }

           $query1 = "SELECT DISTINCT ON (title) * FROM movie WHERE (title = $1)";
           pg_prepare($conn,"titlesearch",$query1);
           $result1 = pg_execute($conn,"titlesearch",array($title));

           echo "<table class='table table-striped'>";
           echo "<tbody>";

           $i=0;
           while($line = pg_fetch_array($result1,null,PGSQL_ASSOC)){
                foreach($line as $col_value){
                    $fieldname = pg_field_name($result1, $i);
                    switch ($fieldname) {
                        case 'mpaa_rating': {
                            echo "\t\t<tr><td>MPAA Rating</td><td><strong>$col_value</strong></td></tr>\n";
                            break;
                        }
                        case "release_date": {
                            echo "\t\t<tr><td>Release Date</td><td><strong>$col_value</strong></td></tr>\n";
                            break;
                        }
                        case "domestic_gross": {
                            echo "\t\t<tr><td>Domestic Gross</td><td><strong>$col_value</strong></td></tr>\n";
                            break;
                        }
                        case "rt_critic": {
                            echo "\t\t<tr><td>Critic Rating</td><td><strong>$col_value</strong></td></tr>\n";
                            break;
                        }
                        case "rt_audience": {
                            echo "\t\t<tr><td>Audience Rating</td><td><strong>$col_value</strong></td></tr>\n";
                            break;
                        }
                        case "imdb": {
                            echo "\t\t<tr><td>IMDB Rating</td><td><strong>$col_value</strong></td></tr>\n";
                            break;
                        }
                        case "runtime": {
                            echo "\t\t<tr><td>Runtime (min)</td><td><strong>$col_value</strong></td></tr>\n";
                            break;
                        }
                        case "id": {
                            echo "\t\t<tr><td>Movie ID</td><td><strong>$col_value</strong></td></tr>\n";
                            break;
                        }
                        case "metascore": {
                            echo "\t\t<tr><td>Metascore</td><td><strong>$col_value</strong></td></tr>\n";
                            break;
                        }
                        case "title": {
                            echo "\t\t<tr><td>Title</td><td><strong>$col_value</strong></td></tr>\n";
                            break;
                        }
                        case "year": {
                            echo "\t\t<tr><td>Year</td><td><strong>$col_value</strong></td></tr>\n";
                            break;
                        }
                        case "plot": {
                            echo "\t\t<tr><td>Movie Plot</td><td id='this'><strong>$col_value</strong></td></tr>\n";
                            break;
                        }
                        default : {
                           echo "\t\t<tr><td>$fieldname</td><td><strong>$col_value</strong></td></tr>\n";
                           break;
                        }
                    }
                    $i=$i+1;
                }
           }

           echo "</tbody>\n";
           echo "</table>\n";


           pg_free_result($result1);

           pg_close($conn);
  }
?>
                </div>

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

                    <!--<div class="col-lg-3 btn-group btn-group-vertical">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-tasks fa-fw"></i><strong> Search by First Letter</strong></h3>
                            </div>
                            <div class="panel-body">
                            	<ul class="list-group movie_titles">
                            		<a href="/movie_titles?letter=a" class="list-group-item btn-sm strong">A</a>
                            		<a href="/movie_titles?letter=b" class="list-group-item btn-sm strong">B</a>
                            		<a href="/movie_titles?letter=c" class="list-group-item btn-sm strong">C</a>
                            		<a href="/movie_titles?letter=d" class="list-group-item btn-sm strong">D</a>
                            		<a href="/movie_titles?letter=e" class="list-group-item btn-sm strong">E</a>
                            		<a href="/movie_titles?letter=f" class="list-group-item btn-sm strong">F</a>
                            		<a href="/movie_titles?letter=g" class="list-group-item btn-sm strong">G</a>
                            		<a href="/movie_titles?letter=h" class="list-group-item btn-sm strong">H</a>
                            		<a href="/movie_titles?letter=j" class="list-group-item btn-sm strong">I</a>
                            		<a href="/movie_titles?letter=j" class="list-group-item btn-sm strong">J</a>
                            		<a href="/movie_titles?letter=k" class="list-group-item btn-sm strong">K</a>
                            		<a href="/movie_titles?letter=l" class="list-group-item btn-sm strong">L</a>
                            		<a href="/movie_titles?letter=m" class="list-group-item btn-sm strong">M</a>
                            		<a href="/movie_titles?letter=n" class="list-group-item btn-sm strong">N</a>
                            		<a href="/movie_titles?letter=o" class="list-group-item btn-sm strong">O</a>
                            		<a href="/movie_titles?letter=p" class="list-group-item btn-sm strong">P</a>
                            		<a href="/movie_titles?letter=q" class="list-group-item btn-sm strong">Q</a>
                            		<a href="/movie_titles?letter=r" class="list-group-item btn-sm strong">R</a>
                            		<a href="/movie_titles?letter=s" class="list-group-item btn-sm strong">S</a>
                            		<a href="/movie_titles?letter=t" class="list-group-item btn-sm strong">T</a>
                            		<a href="/movie_titles?letter=u" class="list-group-item btn-sm strong">U</a>
                            		<a href="/movie_titles?letter=v" class="list-group-item btn-sm strong">V</a>
                            		<a href="/movie_titles?letter=w" class="list-group-item btn-sm strong">W</a>
                            		<a href="/movie_titles?letter=x" class="list-group-item btn-sm strong">X</a>
                            		<a href="/movie_titles?letter=y" class="list-group-item btn-sm strong">Y</a>
                            		<a href="/movie_titles?letter=z" class="list-group-item btn-sm strong">Z</a>
                            		<a href="/movie_titles?letter=#" class="list-group-item btn-sm strong">#</a>
                            	</ul>
                            	<div class="text-right">
                                    <a href="#">View All Movies <i class="fa fa-arrow-circle-right"></i></a>
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
