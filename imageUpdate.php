<?php

include_once "./dbconnect.php";

$targetDir = "./img/";

$img = $_FILES['pp']['name'];
$imageName = time() . '_' . $_FILES['pp']['name'];
$adminEmail = $_POST['email'];

$targetFilePath = $targetDir . $imageName;

$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

//allow certain file formats
if (empty($img)) {
    header("Location: ./admn_dashboard.php");
} else {
    $allowTypes = array('jpg', 'jpeg', 'png');
    if (in_array($fileType, $allowTypes)) {
        //upload file to server
        if (move_uploaded_file($_FILES['pp']['tmp_name'], $targetFilePath)) {
            $query = mysqli_query($conn, "UPDATE admin SET profilePic = '$imageName' WHERE email = '$adminEmail';");
            if ($query) {
                sleep(1);
                header("Location: ./admn_dashboard.php");
            }
        }
    }
}
