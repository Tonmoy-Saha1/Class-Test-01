<?php
    include("dbconfig.php");
    $name = $_GET['name'];
    $start = $_GET['start'];
    $end = $_GET['end'];
    $query = "INSERT INTO leave_entry VALUES(NULL, '$name', '$start', '$end', 'PENDING', ' ')";
    $con->exec($query);

    echo "Record inserted:<br> name = $name <br> start = $start <br> end=$end";



	// echo "<p><a href=read.php>READ all records</a>";
?>