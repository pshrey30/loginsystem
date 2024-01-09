<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "users";


//creating connection
$conn = mysqli_connect($servername, $username, $password, $database);

//if something went wrong
if (!$conn){
    
    die("Error". mysqli_connect_error());
}
?>