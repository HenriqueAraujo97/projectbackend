<?php include 'conn.php'; ?>
<?php

// checking and get the values from user
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $equipment = $_POST['equipment'];
    $model = $_POST['model'];
    $problem = $_POST['problem'];
    $date = $_POST['date'];

    //sql query
    $query = "insert into assistance (assist_id, name, email, equipment, model, problem, date, employee_id, assist_check) values (DEFAULT, '$name', '$email', '$equipment', '$model', '$problem', '$date', 'Pending', 'Pending')";
    $query_fire = mysqli_query($con, $query);

    //checking query
    if ($query_fire) {
?>
        <script>
            alert("Submitted");
            location.replace("assistance.php")
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Submit Failed");
            location.replace("assistance.php")
        </script>
<?php

        // echo "Error: " . $query_fire . "<br>" . mysqli_error($con);
    }
}
?>