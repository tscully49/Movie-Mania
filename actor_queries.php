<?PHP
	include("../secure/database.php");
    $conn=pg_connect(HOST. " ".DBNAME." ".USERNAME." ".PASSWORD); // Connects to the database

    if(!$conn){
        echo"<p> Connection Fail</p>";
    }

    $pop_actors = pg_prepare($conn, "Actors_query", 'SELECT name, count(movie_id) FROM actor_in_movie AS am INNER JOIN actor AS a ON (a.id = am.actor_id) GROUP BY actor_id, name ORDER BY count(movie_id) DESC');
    $pop_actors = pg_execute($conn, "Actors_query", array());


    pg_close($conn);
?>