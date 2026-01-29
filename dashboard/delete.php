<?php

include 'connection.php';

$aid = $_GET['id'];

$delete = "DELETE FROM `add_product` WHERE id ='$aid'";

$query = mysqli_query($conn, $delete);

if($query){
    header('location:dashboard.php');
}


?>