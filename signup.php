<?php


$msg = "";


session_start();
include_once "./dbconnect.php";

//create variables
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $conPassword = $_POST['conPassword'];

    if ($conPassword === $password) {

        // 
        $encrypted_password = password_hash($password, PASSWORD_BCRYPT);

        $query = mysqli_query($conn, "INSERT INTO admin (name, email, mobile, password, profilePic) VALUES ('$name', '$email', '$mobile', '$encrypted_password', 'profileDefault.jpg');");
        if ($query) {
            sleep(1);
            header("Location: ./login.php");
        } else {
            $msg = "incorrect email or password";
        }
    } else {
        $msg = "Password's don't match";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoomLink | Register</title>
    <!---iconscout here-------------------->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <!---css here-------------------------->
    <link rel="stylesheet" href="css/logreg.css">
</head>

<body>
    <div class="container-reg">
        <div class="form">
            <div class="form login">
                <p style="margin: 10px auto; color: red;"><?php echo $msg ?></p>

                <span class="title">Sign-Up</span>
                <form action="signup.php" method="POST">
                    <div class="input-field">
                        <input type="text" name="name" placeholder="Enter your name" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" name="email" placeholder="Enter your email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="mobile" name="mobile" placeholder="Enter your mobile" maxlength="10" required>
                        <i class="las la-mobile"></i>
                        <!--<i class="uil uil-eye-slash showHidePw"></i>-->
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" placeholder="Enter your password" required>
                        <i class="uil uil-lock icon"></i>
                        <!--<i class="uil uil-eye-slash showHidePw"></i>-->
                    </div>
                    <div class="input-field">
                        <input type="password" name="conPassword" placeholder="Confirm password" required>
                        <i class="uil uil-lock icon"></i>
                        <!--<i class="uil uil-eye-slash showHidePw"></i>-->
                    </div>
                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logcheck">
                            <label for="logcheck" class="text">I agree to the terms</label>
                        </div>
                        <a href="#" class="text fp">Terms and conditions</a>
                    </div>

                    <div class="input-field button">
                        <input type="submit" name="submit" value="Sign-Up">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Already a member?
                        <a href="login.php" class="text signup-text">Login now</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</body>
<footer>

</footer>

</html>