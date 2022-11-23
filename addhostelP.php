<?php

session_start();
include_once "./dbconnect.php";

$targetDir = "./img/";


$fileName = basename($_FILES['file']['name']);
$imageName = time() . '_' . $_FILES['file']['name'];
$name = mysqli_real_escape_string($conn, $_POST['hostelName']);
$location = mysqli_real_escape_string($conn, $_POST['hostelLocation']);
$type = mysqli_real_escape_string($conn, $_POST['hostelType']);
$room1 =  $_POST['roomtype1'];
$roomP1 = mysqli_real_escape_string($conn, $_POST['price1']);
$room2 = $_POST['roomtype2'];
$roomP2 = mysqli_real_escape_string($conn, $_POST['price2']);
$room3 == $_POST['roomtype3'];
$roomP3 = mysqli_real_escape_string($conn, $_POST['price3']);
$room4 = $_POST['roomtype4'];
$roomP4 = mysqli_real_escape_string($conn, $_POST['price4']);

$targetFilePath = $targetDir . $imageName;

$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

// echo "$name<br>$location<br>$type<br>$room1 $roomP1<br>$room2 $roomP2<br>$room3 $roomP3<br>$room4 $roomP4";

$allowTypes = array('jpg', 'jpeg', 'png');
if (in_array($fileType, $allowTypes)) {
    //upload file to server
    if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)) {
        $query = mysqli_query($conn, "INSERT INTO hostelpending (image, name, location, hostelType, roomtype1, roomtype2, roomtype3, roomtype4, price1, price2, price3, price4)
        VALUES ('$imageName', '$name', '$location', '$type', '$room1', '$room2', '$room3', '$room4', '$roomP1', '$roomP2', '$roomP3', '$roomP4');");

        if ($query) {
            header("Location:./index.php");
        }
    }
}
