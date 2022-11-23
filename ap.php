<?php
session_start();
include_once "./dbconnect.php";

function login($conn)
{
    if (!$_SESSION['username']); {
        header('location: login.php');
    }
}
