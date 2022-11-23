<?php

session_start();
include_once "./dbconnect.php";


$fname = $_POST["firstname"];
$lname = $_POST["lastname"];
$studentName = "$fname $lname";
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
$indexnum = $_POST["indexnum"];
$hname = $_POST["hostelname"];
$htype = $_POST["hosteltype"];
$price = $_POST["price"];
$ref = $_POST["refID"];

// popup

$popUp = "<div class='popup'>
        <h3>Rate Us</h3>
        <p>Pending approval, if you don't recieve a notification after 24hrs money will be sent back.<br>In the mean time, </p>
        <form action='rating.php' method='POST'>
            <input type='text' name='name' placeholder='Your Name' />
            <textarea name='message' placeholder='How was your experience' /></textarea>
            <input type='text' name='rating' value='0' id='rating' hidden>
            <div class='numbers'>
                <i class='las la-star 1' id='1'></i>
                <i class='las la-star 2' id='2'></i>
                <i class='las la-star 3' id='3'></i>
                <i class='las la-star 4' id='4'></i>
                <i class='las la-star 5' id='5'></i>
            </div>

            <button type='submit' name='submit'>Submit Rating</button>
        </form>
    </div>";


$sql = mysqli_query($conn, "INSERT INTO pending (name, email, indexNo, hostelName, price, referenceID)
        VALUES ('$studentName', '$email', '$indexnum', '$hname', '$price', '$ref');");

$sql2 = mysqli_query($conn, "INSERT INTO students (firstName, lastName, indexNo, email, mobileNo, gender, hostelName, hostelType)
        VALUES ('$fname', '$lname', '$indexnum', '$email', '$mobile', '$gender', '$hname', '$htype');");

if ($sql && $sql2) {
    sleep(1);
    $_SESSION['success'] = $popUp;
    header("Location: ./register.php");
} else {
    $_SESSION['error'] = "<p style='color: red;'>Try again later</p>";
    header("Location: ./register.php");
}
