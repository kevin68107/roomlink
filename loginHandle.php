<?php

session_start();
include_once "./dbconnect.php";


$email = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM admin WHERE email = '$email' LIMIT 1;");
if (mysqli_num_rows($query) > 0) {
    $dbResutls = mysqli_fetch_assoc($query);

    $dbPassword = password_verify($password, $dbResutls['password']);


    if ($dbPassword == 1) {
        $_SESSION['email'] = $email;
        sleep(1);

        if(!empty($_POST['remember_me'])){
            $remember_me=$_POST['remember_me'];
            //set cookie
            setcookie('email',$email,time()+30*24*7);
            setcookie('password',$password,time()+30);
            setcookie('userlogin',$remember_me,time()+30);
        }
        else
        {
            setcookie('email',$email,30);
            setcookie('password',$password,30);
        }

        header("Location: admn_dashboard.php");
}
} else {
    $msg = "Incorrect email or password";
    $_SESSION['email' && 'password'] != $email && $password;
    header("Location: login.php");
    // echo "Error";
}

?>
