<?php

session_start();
include_once "./dbconnect.php";

function handleSession($conn)
{
    if (isset($_SESSION['email'])) {

        $email = $_SESSION['email'];
        $query = mysqli_query($conn, "SELECT * FROM admin WHERE email = '$email' LIMIT 1;");

        if (mysqli_num_rows($query) > 0) {
            $dbResult = mysqli_fetch_assoc($query);
            return $dbResult;
        }
    }

    // if user isn't logged in send back to login
    header("Location: ./login.php");
    die;
}
