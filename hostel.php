<?php

include_once "./dbconnect.php";
include_once "./handleLogin.php";

$dbResult = handleSession($conn);

$pp = $dbResult['profilePic'];
$profilePic = "./img/$pp";
$adminEmail = $dbResult['email'];

$fetch = mysqli_query($conn, "SELECT * FROM students;");

// process image update
if (isset($_POST['updateImage'])) {

    $targetDir = "./img/";

    $img = $_FILES['pp']['name'];
    $imageName = time() . '_' . $_FILES['pp']['name'];
    $adminEmail = $_POST['email'];

    $targetFilePath = $targetDir . $imageName;

    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    //allow certain file formats
    if (empty($img)) {
        header("Location: ./students.php");
    } else {
        $allowTypes = array('jpg', 'jpeg', 'png');
        if (in_array($fileType, $allowTypes)) {
            //upload file to server
            if (move_uploaded_file($_FILES['pp']['tmp_name'], $targetFilePath)) {
                $query = mysqli_query($conn, "UPDATE admin SET profilePic = '$imageName' WHERE email = '$adminEmail';");
                if ($query) {
                    sleep(1);
                    header("Location: ./students.php");
                }
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <title>RoomLink | ADMIN Dashboard</title>
    <!--------icons here----------->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!---CSS here---------------------->
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" type="text/css" href="css/hostel.css">
</head>

<body>

    <div class="profilePicture">
        <form action="students.php" method="POST" enctype="multipart/form-data">
            <div class="imgPreview">
                <img src="<?php echo $profilePic ?>" id="profileDisplay" alt="">
                <label for="imageUpload"></label>
                <input type="file" hidden name="pp" onchange="displayImage(this)" id="imageUpload">
                <input type="hidden" name="email" value="<?php echo $adminEmail ?>">
            </div>
            <h2 class="name"><?php echo $dbResult['name'] ?></h2>
            <div class="buttons">
                <button type="submit" name="updateImage" class="update">Update</button>
                <a class="cancel" onclick="changePicPopUp()">Cancel</a>
            </div>
        </form>
    </div>

    <input type="checkbox" id="nav-toggle">

    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-accusoft"></span><span>RoomLink</span>
            </h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="./admn_dashboard.php"><span class="las la-home"></span>
                        <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="students.php"><span class="las la-users"></span>
                        <span>Students</span></a>
                </li>
                <li>
                    <a href="./approvals.php"><span class="las la-clipboard-list"></span>
                        <span>Approvals</span></a>
                </li>
                <!--<li>
                    <a href=""><span class="las la-user-circle"></span>
                        <span>Account</span></a>
                </li>-->
                <li>
                    <a href="./hostel.php" class="active"><span class="las la-building"></span>
                        <span>Hostels</span></a>
                </li>
                <li>
                    <a href="./hostelapproval.php"><span class="las la-igloo"></span>
                        <span>Hostel Approval</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="container">

        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>
                Dashboard
            </h2>

            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="search here" />
            </div>
            <!--user content here-->
            <div class="user-wrapper">
                <img src="<?php echo $profilePic ?>" width="40px" height="40px" alt="user image" style="cursor: pointer;" onclick="changePicPopUp()">
                <div>
                    <h4><?php echo $dbResult['name'] ?></h4>
                    <small>Admin</small>
                </div>
                <div class="exit">
                    <form action="logoutcode.php" method="post">
                        <a href="./logoutcode.php?email=<?php echo $dbResult['email'] ?>"> <Span class="las la-door-open"></Span></a>
                    </form>
                </div>
            </div>
        </header>

        <main>
            <div class="formtit">
                <span class="htitle">Hostel Form</span>
                <form class="hosform" action="hostelsform.php" method="post">

                    <div class="mega-field">
                        <div class="field">
                            <label for="firstname">Hostel Name</label>
                            <input type="text" id="Hostel name" name="hostelname" required>
                        </div>

                        <div class="field">
                            <label for="lastname">Hostel Type</label>
                            <input type="text" id="Hostel Type" name="hosteltype">
                        </div>

                        <div class="field">
                            <label for="location">Location</label>
                            <input type="text" id="location" name="location">
                        </div>

                        <div class="field">
                            <label for="">Room Type</label>
                            <input type="text" id="room Type" name="roomtype">
                        </div>

                        <div class="field">
                            <label for="rate">Rate</label>
                            <input type="text" id="rate" name="rate">
                        </div>

                    </div>

                    <div class="button">
                        <button>save</button>
                    </div>

                    <?php
            if (isset($_SESSION['success'])) {
                echo $_SESSION['success'];
                unset($_SESSION['success']);
            }
            ?>
                </form>
            </div>

        </main>

    </div>

    <script>
        //
        function changePicPopUp() {
            const pp = document.querySelector('.profilePicture');
            pp.classList.toggle('active');
            document.querySelector('#profileDisplay').setAttribute('src', "<?php echo $profilePic ?>");
        }

        function displayImage(e) {
            if (e.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(e.files[0]);
            }
        }
    </script>

</body>

</html>