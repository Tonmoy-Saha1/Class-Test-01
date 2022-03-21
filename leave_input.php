<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Input</title>
</head>
<body>
    <h1>Apply For Leave</h1>
    <form action="leave_entry.php" method="GET">
        <p>
            Name: <input type=text name="name" required> <br>
        </p>

        <p>
            
            Leave Start: <input type=text name="start" required> <br>
        </p>
        <p>
            Leave End: <input type=text name="end" required> <br>
        </p>

        <p>
            <input type=submit value=Insert>
        </p>
    </form>
</body>
</html>