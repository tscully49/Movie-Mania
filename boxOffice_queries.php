<?PHP
	include("../secure/database.php");
    $conn=pg_connect(HOST. " ".DBNAME." ".USERNAME." ".PASSWORD); // Connects to the database

    if(!$conn){
        echo"<p> Connection Fail</p>";
    }

    $Box_years = pg_prepare($conn, "box_years", 'SELECT year AS "Year", sum(domestic_gross) AS "Total Gross" FROM movie GROUP BY year ORDER BY year ASC');
    $Box_years = pg_execute($conn, "box_years", array());

    $Box_genres = pg_prepare($conn, "genre_yrs", 'WITH id_list AS (SELECT movie_genre.movie_id, genre.genre FROM movie_genre INNER JOIN genre ON (movie_genre.genre_id = genre.genre_id)) SELECT genre AS "Genre", sum(domestic_gross) AS "Total Gross" FROM movie AS m INNER JOIN id_list AS i ON (m.id = i.movie_id) GROUP BY genre ORDER BY genre ASC');
    $Box_genres = pg_execute($conn, "genre_yrs", array());

    $Box_directors = pg_prepare($conn, "dir_years", 'WITH id_list AS (SELECT name, movie_id FROM director_of_movie INNER JOIN director ON (director.id = director_of_movie.movie_id)) SELECT name AS "Name", sum(domestic_gross) AS "Total Gross" FROM movie AS m INNER JOIN id_list AS i ON (m.id = i.movie_id) GROUP BY name ORDER BY name ASC');
    $Box_directors = pg_execute($conn, "dir_years", array());

    pg_close($conn);
?>