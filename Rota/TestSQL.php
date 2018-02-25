<!DOCTYPE html>
<head>
<?php include "../inc/dbinfo.inc"; ?>
    <title>SQL Test</title>
</head>
<?php

$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);

// Check connection
if (mysqli_connect_errno()) { 
    echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
}
else {
    echo "Connected successfully";
}