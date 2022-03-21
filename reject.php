<?php
    include("dbconfig.php");
    $id = $_GET['id'];

    $query = "UPDATE leave_entry SET status1='REJECTED' WHERE id='$id'";
    $con->exec($query);

    echo  $query;

    echo "<p>Request Rejected:<br>";



	echo "<p><a href=leave_application_dashboard.php>READ all records</a>";
?>