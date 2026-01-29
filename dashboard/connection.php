<?php

$username = "root";
$password = "";
$server = "localhost";
$database = "store_dashboard";

// connection Query

$conn = mysqli_connect($server, $username, $password, $database);


if ($conn) {
    
    ?>
    <script>
        // alert("connection successful..");
        </script>

        <?php
}

else{
    ?>
    <script>
        alert("No connection..");
        </script>

        <?php
}


?>

