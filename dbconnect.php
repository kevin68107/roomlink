<?php

//these are the details to the database, it's being stored in the corresponding variables
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "roomlink";

// this isa php command that makes use of the above variables, initiating a connection to the database
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);


// this iff statement checks wheter the connection was established, if not, return an error. 
if ($conn) {
    // echo "Database Connected" . "<br>";
} else {
    mysqli_connect_error();
};
