<?php include 'conn.php' ?>
<?php

// checking and get the values from user
if (isset($_POST['delete'])) {
    $assist_id = $_POST['assist_id'];

    //sql query
    $query = "delete from assistance where assist_id =  '$assist_id'";
    $query_fire = mysqli_query($con, $query);

    //checking query
    if ($query_fire) {
?>
        <script>
            alert("Submitted");
            location.replace("adminpage.php")
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Submit Failed");
            location.replace("adminpage.php")
        </script>
<?php

        // echo "Error: " . $query_fire . "<br>" . mysqli_error($con);
    }
}
?>
