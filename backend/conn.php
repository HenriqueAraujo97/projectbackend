<!-- db connection -->
<?php
$username = "root";
$password = "";
$server = "localhost";
$db = "nodeproject";

$con = mysqli_connect($server, $username, $password, $db);

if ($con) {
    echo "";
} else {
    die("no connection" . mysqli_connect_error());
}
