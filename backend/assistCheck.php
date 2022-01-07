<?php include 'conn.php' ?>
<?php
//checking and get the values from user
if (isset($_POST['submit'])) {
    $assist_id = $_POST['assist_id'];

    //sql query
    $query = "update assistance Set assist_check = 'Done' where assist_id = '$assist_id'";
    $query_fire = mysqli_query($con, $query);

    //checking query
    if ($query_fire) {
?>
        <script>
            alert("Submitted");
            location.replace("employee.php")
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Submit Failed");
            location.replace("employee.php")
        </script>
<?php

        // echo "Error: " . $query_fire . "<br>" . mysqli_error($con);
    }
}
?>