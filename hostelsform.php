<?php

session_start();
include_once "./dbconnect.php";

$hname = $_POST["hostelname"];
$htype = $_POST["hosteltype"];
$location = $_POST['location'];
$rate = $_POST['rate'];
$rtype = $_POST['roomtype'];


$popUp = "<div class='popup'>
                <h3>Hoste Info</h3>
                <p>Data Saved Succesfully</p>
                <a href='admn_dashboard.php'>Go Back to Home</a>
            </div>";


$sql = mysqli_query($conn, "INSERT INTO hostels (hostelName, hostelType, location, roomType, rate)
        VALUES ('$hname', '$htype', '$location', '$rtype', '$rate');");


if ($sql) {
    sleep(1);
    $_SESSION['success'] = $popUp;
    header("Location: ./hostel.php");
}
?>
