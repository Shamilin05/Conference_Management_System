<?php

$connection = mysqli_connect("localhost","root","");

$db = mysqli_select_db($connection,"cms");
$delete = $_GET['del'];


$sql = "delete from addconference where Id = '$delete'";


if(mysqli_query($connection,$sql))
           {

            echo '<script> location.replace("addedconference.php")</script>';  
           }
           else
           {
           echo "Some thing Error" . $connection->error;

           }

?>