<?php
session_start();
include './dbconnect.php';

if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $pass = md5($password);

    $query = "SELECT * FROM amin WHERE email='$email' AND password='$password' ";
    $query_run = mysqli_query($conn, $query);
    $queryrow = mysqli_num_rows($query_run);
    if($queryrow>0)
    {
        //session
        $userdata = mysqli_fetch_assoc($query_run);
        $_SESSION['user_id']=$userdata['customer_id'];

        if(!empty($_POST['remember_me'])){
            $remember_me=$_POST['remember_me'];
            //set cookie
            setcookie('email',$email,time()+30);
            setcookie('password',$password,time()+30);
        }
        else
        {
            setcookie('email',$email,30);
            setcookie('password',$password,30);
        }
        //redirect to dashboard
        
    }
    // if(mysqli_fetch_array($query_run))
    // {
    //     $_SESSION['email'] = $email;
    //     sleep(1);
    //     header("Location:admn_dashboard");//insert the location after login
    // }
    else{
        // $_SESSION['status'] = "Incorrect Email and Password";
        // header('Location:login.php');//insert destination after incorrect login.
    }

    //logout
}
?>