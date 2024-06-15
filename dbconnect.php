<?php
// Database connection 
$cgs_servername = "localhost";
$cgs_username = "root";
$cgs_password = "";
$cgs_dbname = "encore";

// Create connection
$connection = new mysqli($cgs_servername, $cgs_username, $cgs_password, $cgs_dbname);
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

/* Root Path : <?php echo $cgs_root; ?> */
$cgs_root = "http://localhost/encore/";
?>