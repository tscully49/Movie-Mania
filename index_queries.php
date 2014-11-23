<?PHP
	include("../secure/database.php");
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

    $diff_genres = pg_prepare($conn, "all_genres", 'SELECT g.genre, count(mg.movie_id) FROM movie_genre as mg INNER JOIN genre as g ON (g.genre_id=mg.genre_id) GROUP BY (g.genre) ORDER BY count(mg.movie_id) desc');
    $diff_genres = pg_execute($conn, "all_genres", array());
    $box_office_query = pg_prepare($conn, "total_box_office", 'SELECT rank() OVER (ORDER BY domestic_gross DESC) AS Rank, title AS Title, release_date AS Release Date, domestic_gross AS Total Gross FROM movie LIMIT 10');
    $box_office_query = pg_execute($conn, "total_box_office", array());

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