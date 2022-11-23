<?php

include_once "./dbconnect.php";

$email = $_GET['email'];

$query = mysqli_query($conn, "UPDATE students SET approve = 'approved' WHERE email = '$email';");
$query2 = mysqli_query($conn, "DELETE from pending WHERE email = '$email';");

if ($query && $query2) {
    header("Location: ./approvals.php");
}
