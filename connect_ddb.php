<?php
  $host = "localhost";
  $username = "root";
  $password = "";
  $dbname = "crud";


// creation connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// check connection 
if (!$conn) {
    die("Erreur de connection: " .mysqli_connect_error());
}