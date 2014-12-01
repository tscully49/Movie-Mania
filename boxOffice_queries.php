<?PHP
	include("../secure/database.php");
    $conn=pg_connect(HOST. " ".DBNAME." ".USERNAME." ".PASSWORD); // Connects to the database

    if(!$conn){
        echo"<p> Connection Fail</p>";
    }

    $Box_years = pg_prepare($conn, "box_years", 'SELECT year AS "Year", sum(domestic_gross) AS "Total Gross" FROM movie GROUP BY year ORDER BY year ASC');
    $Box_years = pg_execute($conn, "box_years", array());

    pg_close($conn);
?>