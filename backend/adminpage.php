<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Admin Panel</title>
</head>
<?php include 'conn.php' ?>
<!-- admin page after login -->

<body>
    <?php include 'navbar.php' ?>
    <div class="text-center mt-5">
        <form action="addAssist.php" method="post">
            <a href="employeeID.php" style="color: #00008B;">Employees ID</a>
            <input name="employee_id" type="number" placeholder="Enter Employee Id">
            <input name="assist_id" type="number" placeholder="Enter Assist Id">
            <input type="submit" name="submit" class="btn btn-primary" value="Serve Employee" />

    </div>
    </form>
    <div class="text-center mt-5">
        <form action="delAssist.php" method="post">
            <input name="assist_id" type="number" placeholder="Enter Assist Id">
            <input type="submit" name="delete" class="btn btn-danger" value="Delete Assistance" />
    </div>
    </form>
    <?php include 'employeeAdmin.php' ?>
</body>

</html>