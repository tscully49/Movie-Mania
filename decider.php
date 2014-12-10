<?php
  //decides whether to send search value to movie page or actor profile page
  session_start();
    include("../secure/database.php");
    $dbconn=pg_connect(HOST. " ".DBNAME." ".USERNAME." ".PASSWORD); // Connects to the database

    if(!$dbconn){
        echo"<p> Connection Fail</p>";
    }


  //checks if search value was an actor name
  $value = $_POST['search'];
  $error_query = 'SELECT name FROM actor WHERE name = $1';
  pg_prepare($dbconn, 'error', $error_query);
  $error_check = pg_execute($dbconn, 'error', array($value));
  if(pg_num_rows($error_check) > 0){
  	$_SESSION['name'] = $_POST['search'];
    pg_close($dbconn);
    header('Location: https://babbage.cs.missouri.edu/~cs3380f14grp12/Movie-Mania/actors_profile_trial.php');
		exit;
  }

  //checks if search value was movie name
  $value = $_POST['search'];
  $error_query2 = 'SELECT title FROM movie WHERE title = $1';
  pg_prepare($dbconn, 'error2', $error_query2);
  $error_check2 = pg_execute($dbconn, 'error2', array($value));
  if(pg_num_rows($error_check2) > 0){

  		$_SESSION['title'] = $_POST['search'];
      pg_close($dbconn);
			header('Location: https://babbage.cs.missouri.edu/~cs3380f14grp12/Movie-Mania/movies.php');
			exit;
 				
 	}
 	else{
    pg_close($dbconn);
 		header('Location:  https://babbage.cs.missouri.edu/~cs3380f14grp12/Movie-Mania/no_result.php');
    exit;
 	}

  pg_close($dbconn);
?>