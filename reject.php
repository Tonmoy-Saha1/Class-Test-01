<?php
    include("dbconfig.php");
    $id = $_GET['id'];

    $query = "UPDATE leave_entry SET status1='REJECTED' WHERE id='$id'";
    $con->exec($query);

    echo  $query;

    echo "<p>Request Rejected:<br>";

    ?>
        <form action="rejectremark.php" method="GET">
            <p>
                <input type="hidden" name="id" value="<?php echo $id; ?>" >
            </p>
            <p>
                Remarks: <input type="text" name="remarks">
            </p>
            <button>submit</button>
        </form>
    <?php



	echo "<p><a href=leave_application_dashboard.php>READ all records</a>";
?>