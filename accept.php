<?php
    include("dbconfig.php");
    $id = $_GET['id'];

    $query = "UPDATE leave_entry SET status1='APPROVED' WHERE id='$id'";
    $con->exec($query);

    echo  $query;

    echo "<p>Request approved:<br>";



	echo "<p><a href=leave_application_dashboard.php>READ all records</a>";
?>