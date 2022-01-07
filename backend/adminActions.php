<?php include 'conn.php'; ?>
<?php
// checking and get the values frim user
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // sql query
    $query = "select * from admin where username = '$username' AND password = '$password'";
    $query_fire = mysqli_query($con, $query);
    $count = mysqli_num_rows($query_fire);

    //checking query
    if ($count > 0) {
        header("location:adminpage.php");
    } else {
?>
        <script>
            alert("Invalid username or passowrd");
            location.replace("admin.php");
        </script>
<?php

    }
}
?>