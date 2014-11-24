<?PHP
	include("../secure/database.php");
    $conn=pg_connect(HOST. " ".DBNAME." ".USERNAME." ".PASSWORD); // Connects to the database

    if(!$conn){
        echo"<p> Connection Fail</p>";
    }

    $pop_actors = pg_prepare($conn, "Actors_query", 'SELECT name AS "Name", count(movie_id) AS "# of Movies" FROM actor_in_movie AS am INNER JOIN actor AS a ON (a.id = am.actor_id) GROUP BY actor_id, name ORDER BY count(movie_id) DESC LIMIT 20');
    $pop_actors = pg_execute($conn, "Actors_query", array());

    $pop_directors = pg_prepare($conn, "directors", 'SELECT name, count(movie_id) FROM director_of_movie AS am INNER JOIN director AS a ON (a.id = am.director_id) GROUP BY director_id, name ORDER BY count(movie_id) DESC LIMIT 20 OFFSET 1');
    $pop_directors = pg_execute($conn, "directors", array());

    pg_close($conn);
?>