<?php
include("dbconfig.php");
$remarks = $_GET['remarks'];
$id = $_GET['id'];

$query = "UPDATE leave_entry SET remarks='$remarks' WHERE id='$id'";
$con->exec($query);

echo "<p><a href=leave_application_dashboard.php>READ all records</a>";
?>