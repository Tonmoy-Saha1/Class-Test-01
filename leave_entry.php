<?php
    include("dbconfig.php");
    $name = $_GET['name'];
    $start = $_GET['start'];
    $end = $_GET['end'];
    $query = "INSERT INTO leave_entry VALUES(NULL, '$name', '$start', '$end', 'PENDING', ' ')";
    $con->exec($query);

    // echo "Record inserted:<br> f0 = $f0 <br> f1 = $f1";



	// echo "<p><a href=read.php>READ all records</a>";
?>