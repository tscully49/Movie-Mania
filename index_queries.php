<?PHP
	include("../../secure/database.php");
    $conn=pg_connect(HOST. " ".DBNAME." ".USERNAME." ".PASSWORD); // Connects to the database

    if(!$conn){
        echo"<p> Connection Fail</p>";
    }

    $result = pg_prepare($conn, "movies",'SELECT count(*) AS count FROM movie');
    $result = pg_execute($conn, "movies", array());
    $years = pg_prepare($conn, "year", 'SELECT (max(year)-min(year)) AS total FROM movie');
    $years = pg_execute($conn, "year", array());
    $actors = pg_prepare($conn, "actor", 'SELECT count(*) FROM actor');
    $actors = pg_execute($conn, "actor", array());
    $genres = pg_prepare($conn, "genre", 'SELECT count(*) FROM genre');
    $genres = pg_execute($conn, "genre", array());

    $num_movies=pg_fetch_array($result, null, PGSQL_ASSOC);
    $num = $num_movies['count'];
    $num_years = pg_fetch_array($years, null, PGSQL_ASSOC);
    $num_years2 = $num_years['total'];
    $num_actors = pg_fetch_array($actors, null, PGSQL_ASSOC);
    $num_actors2 = $num_actors['count'];
    $num_genres = pg_fetch_array($genres, null, PGSQL_ASSOC);
    $num_genres2 = $num_genres['count'];

    pg_close($conn);
?>