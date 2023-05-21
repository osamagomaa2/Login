<?php
$dbserver = "localhost";
$dbusername = "osama";
$dbpassword = "anewpassword";
$dblocalhost = "login";


$connection = new mysqli($dbserver,$dbusername,$dbpassword,$dblocalhost);

if($connection->connect_error){
    die("Connection Failed".$connection->connect_error);

}

   // echo "Connection Successful";

?>