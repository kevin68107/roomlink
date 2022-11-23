<?php

session_start();
include_once "./dbconnect.php";

$name = mysqli_escape_string($conn, $_POST['name']);
$message = mysqli_escape_string($conn, $_POST['message']);
$rating = $_POST['rating'];

$query = mysqli_query($conn, "INSERT INTO reviews (name, message, rating) VALUES ('$name', '$message', '$rating');");

if ($query) {
    sleep(1);
    header("Location: ./index.php");
} else {
    mysqli_connect_error(die());
}
