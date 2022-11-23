<?php

session_start();
include_once "./dbconnect.php";

$msg = "";

//create variables
// if (isset($_POST['login'])) {
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     $query = mysqli_query($conn, "SELECT * FROM admin WHERE email = '$email' LIMIT 1;");
//     if (mysqli_num_rows($query) > 0) {
//         $dbResutls = mysqli_fetch_assoc($query);

//         $dbPassword = password_verify($password, $dbResutls['password']);

//         if ($dbPassword == 1) {
//             $_SESSION['email'] = $email;
//             sleep(1);
//             // header("Location: admn_dashboard.php");
//             $msg =  "Logged In";
//         }
//     } else {
//         $msg =  "Incorrect email or password";
//     }
// }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoomLink | index</title>
    <!---iconscout here-------------------->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!---css here-------------------------->
    <link rel="stylesheet" href="css/logreg.css">
</head>

<body>
    <div class="container">
        <div class="img-slider">
            <h2>Welcome to RoomLink</h2>
            <p>We provide you the best and affordable accomodation at your comfort.</p>
        </div>
        <div class="form">
            <div class="form login">
                <p><?php echo $msg ?></p>
                <span class="title">Login</span>
                <form action="loginHandle.php" method="post">
                    <div class="input-field">
                        <input type="email" name="email" placeholder="Enter your email" required value="<?php if(isset($_COOKIE['email'])){echo $_COOKIE['email'];};?>">
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" placeholder="Enter your password" required value="<?php if(isset($_COOKIE['password'])){echo $_COOKIE['password'];};?>">
                        <i class="uil uil-lock icon"></i>
                        <!--<i class="uil uil-eye-slash showHidePw"></i>-->
                    </div>
                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" name="remember_me" <?php if(isset($_COOKIE['userlogin'])){echo "checked" ;};?>>
                            <label for="logcheck" class="text">Remember me</label>
                        </div>
                        <a href="#" class="text fp">Forgot password?</a>
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="Login" name="login">
                    </div>

                    <div class="login-signup">
                        <span class="text">Not a member?
                            <a href="signup.php" class="text signup-text">Signup now</a>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
<footer>

</footer>

</html>