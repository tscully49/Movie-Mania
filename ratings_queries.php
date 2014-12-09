<?PHP
	include("../secure/database.php");
    $conn=pg_connect(HOST. " ".DBNAME." ".USERNAME." ".PASSWORD); // Connects to the database

    if(!$conn){
        echo"<p> Connection Fail</p>";
    }

    $result1 = pg_prepare($conn, "rt_by_genre",'WITH id_list AS (SELECT genre, movie_id FROM genre INNER JOIN movie_genre ON (genre.genre_id = movie_genre.genre_id)) SELECT genre AS "Genre", round(avg(rt_critic),2) AS "Average Critic Rating" FROM movie as m INNER JOIN id_list as i ON (m.id = i.movie_id) GROUP BY genre ORDER BY genre ASC');
    $result1 = pg_execute($conn, "rt_by_genre", array());

    $result2 = pg_prepare($conn, "rt_by_year", 'SELECT year AS "Year", round(avg(rt_critic),2) AS "Average Critic Rating" FROM movie GROUP BY year ORDER BY year ASC');
    $result2 = pg_execute($conn, "rt_by_year", array());

    $result3 = pg_prepare($conn, "rt_by_director", 'WITH id_list AS (SELECT name, movie_id FROM director INNER JOIN director_of_movie ON (director.id = director_of_movie.director_id)) SELECT name AS "Name", round(avg(rt_critic),2) AS "Average Critic Rating", count(title) AS "# of Movies Made" FROM movie as m INNER JOIN id_list as i ON (m.id = i.movie_id) GROUP BY name HAVING (count(title) > 10) ORDER BY avg(rt_critic) DESC LIMIT 20');
	$result3 = pg_execute($conn, "rt_by_director", array());

	$result4 = pg_prepare($conn, "rt_by_actor", 'WITH id_list AS (SELECT name, movie_id FROM actor INNER JOIN actor_in_movie ON (actor.id = actor_in_movie.actor_id)) SELECT name AS "Name", round(avg(rt_critic),2) AS "Average Critic Rating", count(title) AS "# of Movies" FROM movie as m INNER JOIN id_list as i ON (m.id = i.movie_id) GROUP BY name HAVING (count(title) > 4) ORDER BY avg(rt_critic) DESC LIMIT 20');
	$result4 = pg_execute($conn, "rt_by_actor", array());

	$result5 = pg_prepare($conn, "rt_by_box", 'SELECT title AS "Title", domestic_gross AS "Total Gross", rt_critic AS " Avg Critic Rating", rt_audience AS "Avg Audience Rating", imdb AS "IMDB Rating" FROM movie ORDER BY domestic_gross DESC LIMIT 10');
	$result5 = pg_execute($conn, "rt_by_box", array());

	$result6 = pg_prepare($conn, "rt_by_rating", 'SELECT mpaa_rating AS "MPAA Rating", round(avg(rt_critic),2) AS "Avg Critic Rating", round(avg(rt_audience),2) AS "Avg Audience Rating", round(avg(imdb :: numeric),2) AS "Avg IMDB Rating", count(title) AS "# of Movies" FROM movie GROUP BY mpaa_rating HAVING (count(title) > 10) ORDER BY mpaa_rating ASC');
	$result6 = pg_execute($conn, "rt_by_rating", array());

	pg_close($conn);
?>