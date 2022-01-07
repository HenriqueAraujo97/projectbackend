<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/styles.css">

    <title>Document</title>
</head>

<?php include 'conn.php'; ?>

<body>
    <div class="main-div">
        <h1>Assist Information</h1>

        <!-- users assistance information -->
        <div class="center-div">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>Client Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Equipment</th>
                            <th>Model</th>
                            <th>Problem</th>
                            <th>Date</th>
                            <th>Assist Employee ID</th>
                            <th>Assist Check</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $select_query = "select * from assistance";
                        $query_fire = mysqli_query($con, $select_query);
                        while ($res = mysqli_fetch_array($query_fire)) {
                        ?>
                            <tr>
                                <td><?php echo $res['assist_id'] ?></td>
                                <td><?php echo $res['name'] ?></td>
                                <td><?php echo $res['email'] ?> </td>
                                <td><?php echo $res['equipment'] ?> </td>
                                <td><?php echo $res['model'] ?> </td>
                                <td><?php echo $res['problem'] ?> </td>
                                <td><?php echo $res['date'] ?> </td>
                                <td><?php echo $res['employee_id'] ?> </td>
                                <td><?php echo $res['assist_check'] ?> </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>

            </div>


            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>