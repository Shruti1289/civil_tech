<?php
$insert = false;
if(isset($_POST['username'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
}
?>