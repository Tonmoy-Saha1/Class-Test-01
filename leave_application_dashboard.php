<?php
    include('dbconfig.php');
    $query = "SELECT * FROM leave_entry";
    $retunobj = $con->query($query);
    $table = $retunobj->fetchAll();
    ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>ALL Table</title>
        </head>
        <body>
            <table>
                <table border>
                    <thead>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Start</th>
                        <th>End</th>
                        <th>Status</th>
                        <th>Accept</th>
                        <th>Reject</th>
                        <th>Remarks</th>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($table as $t0) {
                                ?>
                                <tr>
                                    <td><?php echo $t0['id'];?></td>
                                    <td><?php echo $t0['employee_name'];?></td>
                                    <td><?php echo $t0['leave_start'];?></td>
                                    <td><?php echo $t0['leave_end'];?></td>
                                    <td><?php echo $t0['status1'];?></td>
                                    <td><a href="accept.php?id=<?php echo $t0['id'];?>">Accept</a></td>
                                    <td><a href="reject.php?id=<?php echo $t0['id'];?>">Reject</a></td>
                                    <td><?php echo $t0['remarks'];?></td>
                                </tr>
                                <?php
                            }
                        ?>
                    </tbody>
            </table>
            <br>
            <a href="leave_input.php">Apply For Leave</a>
        </body>
        </html>
    <?php
?>