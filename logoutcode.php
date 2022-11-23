<?php
session_start();

if (isset($_GET['email'])) {
    session_destroy();
    unset($_SESSION['email']);
    header('location: login.php');
}
