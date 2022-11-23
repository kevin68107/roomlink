<?php

include_once "./dbconnect.php";

$fetchRating = mysqli_query($conn, "SELECT * FROM reviews;");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoomLink | Home</title>

    <!-----css here----->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="css/home.css">
</head>

<body>
    <div class="container">
        <header>
            <div class="logo">
                <img src="images/rll.jpg" width="50px" height="50px" alt="">
                <h2>RoomLink</h2>
            </div>

            <nav>
                <ul class="nav-links">

                    <a href="#">
                        <li>Home</li>
                    </a>
                    <a href="#hostels">
                        <li>contact</li>
                    </a>
                    <a href="about.html">
                        <li>About</li>
                    </a>
                    <a href="login.php">
                        <li>Login</li>
                    </a>
                </ul>
            </nav>
        </header>

        <div class="welcome">
            <p>Welcome</p>
            <div class="butthold">
                <div class="buttons">
                    <a href="#hostels"><button>Check Out Hostels</button></a>
                    <a href="addhostel.php"><button>Add a Hostel</button></a><button class="statusBtn"></button>
                </div>
            </div>
        </div>
        <!--<main>-->

        <h2 style="margin-top: 50px; margin-bottom: -50px;text-align: center; color: #5cd1e6; padding: 0 100px; font-size: 32px; width: 100%;">Hostels</h2>
        <section id="hostels">

            <div class="hosteltable">

                <div class="houses">
                    <div class="rooms">
                        <div class="image" id="room-01-image" style="background-image:url(images/bd01.jpeg)">

                            <a class="linkk" href="./hostelfeat/hostel01.html">
                                <div id="room-01">
                                    <i class="fas fa-expand-alt expand"></i>
                                </div>
                            </a>

                        </div>
                        <div class="writings">
                            <p class="tit">Kent Hostel</p>
                            <p style="font-style:italic;"><i class="las la-map-marker"></i>Windy Ridge Opposite</p>
                            <P>Mix</P>
                        </div>
                    </div>

                    <div class="rooms">
                        <div class="image" id="room-02-image" style="background-image:url(images/bd02.jpeg)">
                            <a class="linkk" href="./hostelfeat/hostel02.html">
                                <div id="room-02">
                                    <i class="fas fa-expand-alt expand"></i>
                                </div>
                            </a>
                        </div>
                        <div class="writings">
                            <p class="tit">Gye Nyame Hostel</p>
                            <p style="font-style:italic;"><i class="las la-map-marker"></i>Cocoa Villa</p>
                            <p>Female</p>
                        </div>
                    </div>

                    <div class="rooms">
                        <div class="image" id="room-03-image" style="background-image:url(images/bd03.jpeg)">
                            <a class="linkk" href="./hostelfeat/hostel03.html">
                                <div id="room-03">
                                    <i class="fas fa-expand-alt expand"></i>
                                </div>
                            </a>
                        </div>
                        <div class="writings">
                            <p class="tit">Queen Hostel</p>
                            <p style="font-style:italic;"><i class="las la-map-marker"></i>Akalima</p>
                            <p>Female</p>
                        </div>
                    </div>

                    <div class="rooms">
                        <div class="image" id="room-04-image" style="background-image:url('images/bd04.jpeg')">
                            <a class="linkk" href="./hostelfeat/hostel04.html">
                                <div id="room-04">
                                    <i class="fas fa-expand-alt expand"></i>
                                </div>
                            </a>
                        </div>
                        <div class="writings">
                            <p class="tit">Feldon Hostel</p>
                            <p style="font-style:italic;"><i class="las la-map-marker"></i>Vodafone</p>
                            <p>Mix</p>
                        </div>
                    </div>

                    <div class="rooms">
                        <div class="image" id="room-05-image" style="background-image:url(images/bd05.jpeg)">
                            <a class="linkk" href="./hostelfeat/hostel05.html">
                                <div id="room-05">
                                    <i class="fas fa-expand-alt expland"></i>
                                </div>
                            </a>
                        </div>
                        <div class="writings">
                            <p class="tit">Anchorite Hostel</p>
                            <p style="font-style:italic;"><i class="las la-map-marker"></i>Pipe-ano</p>
                            <p>Male</p>
                        </div>
                    </div>

                </div>

            </div>

            <div class="hosteltable">

                <div class="houses">
                    <div class="rooms">
                        <div class="image" id="room-06-image" style="background-image:url(images/bd06.jpeg)">
                            <a class="linkk" href="./hostelfeat/hostel06.html">
                                <div id="room-01">
                                    <i class="fas fa-expand-alt expand"></i>
                                </div>
                            </a>
                        </div>
                        <div class="writings">
                            <p class="tit">Green Hostel</p>
                            <p style="font-style:italic;"><i class="las la-map-marker"></i>Akalima</p>
                            <p>Mix</p>
                        </div>
                    </div>

                    <div class="rooms">
                        <div class="image" id="room-07-image" style="background-image:url(images/bd07.jpeg)">
                            <a class="linkk" href="./hostelfeat/hostel07.html">
                                <div id="room-02">
                                    <i class="fas fa-expand-alt expand"></i>
                                </div>
                            </a>
                        </div>
                        <div class="writings">
                            <p class="tit">Fresh boy Villa</p>
                            <p style="font-style:italic;"><i class="las la-map-marker"></i>Windy Ridge</p>
                            <p>Male</p>
                        </div>
                    </div>

                    <div class="rooms">
                        <div class="image" id="room-08-image" style="background-image:url(images/bd08.jpeg)">
                            <a class="linkk" href="./hostelfeat/hostel08.html">
                                <div id="room-03">
                                    <i class="fas fa-expand-alt expand"></i>
                                </div>
                            </a>
                        </div>
                        <div class="writings">
                            <p class="tit">Stamford Hostel</p>
                            <p style="font-style:italic;"><i class="las la-map-marker"></i>Windy Ridge</p>
                            <p>Mix</p>
                        </div>
                    </div>

                    <div class="rooms">
                        <div class="image" id="room-09-image" style="background-image:url('images/bd09.jpeg')">
                            <a class="linkk" href="./hostelfeat/hostel09.html">
                                <div id="room-04">
                                    <i class="fas fa-expand-alt expand"></i>
                                </div>
                            </a>
                        </div>
                        <div class="writings">
                            <p class="tit">Yellow Hostel</p>
                            <p style="font-style:italic;"><i class="las la-map-marker"></i>Akalima</p>
                            <p>Mix</p>
                        </div>
                    </div>

                    <div class="rooms">
                        <div class="image" id="room-10-image" style="background-image:url(images/bd10.jpeg)">
                            <a class="linkk" href="./hostelfeat/hostel10.html">
                                <div id="room-05">
                                    <i class="fas fa-expand-alt expland"></i>
                                </div>
                            </a>
                        </div>
                        <div class="writings">
                            <p class="tit">Windys Hostel</p>
                            <p style="font-style:italic;"><i class="las la-map-marker"></i>Windy RIdge</p>
                            <p>Female</p>
                        </div>
                    </div>

                </div>

            </div>

            <div class="hosteltable">

                <div class="houses">
                    <div class="rooms">
                        <div class="image" id="room-11-image" style="background-image:url(images/bd11.jpeg)">
                            <a class="linkk" href="./hostelfeat/hostel11.html">
                                <div id="room-01">
                                    <i class="fas fa-expand-alt expand"></i>
                                </div>
                            </a>
                        </div>
                        <div class="writings">
                            <p class="tit">Pink Hostel</p>
                            <p style="font-style:italic;"><i class="las la-map-marker"></i>EKMA</p>
                            <p>Female</p>
                        </div>
                    </div>

                    <div class="rooms">
                        <div class="image" id="room-12-image" style="background-image:url(images/bd12.jpeg)">
                            <a class="linkk" href="./hostelfeat/hostel12.html">
                                <div id="room-02">
                                    <i class="fas fa-expand-alt expand"></i>
                                </div>
                            </a>
                        </div>
                        <div class="writings">
                            <p class="tit">Kent Hostel</p>
                            <p style="font-style:italic;"><i class="las la-map-marker"></i>Windy Ridge</p>
                            <p>Male</p>
                        </div>
                    </div>

                    <div class="rooms">
                        <div class="image" id="room-13-image" style="background-image:url(images/bd13.jpeg)">
                            <a class="linkk" href="./hostelfeat/hostel13.html">
                                <div id="room-03">
                                    <i class="fas fa-expand-alt expand"></i>
                                </div>
                            </a>
                        </div>
                        <div class="writings">
                            <p class="tit">Unicon Hostel</p>
                            <p style="font-style:italic;"><i class="las la-map-marker"></i>Windy Ridge</p>
                            <p>Mix</p>
                        </div>
                    </div>

                    <div class="rooms">
                        <div class="image" id="room-14-image" style="background-image:url('images/bd14.jpeg')">
                            <a class="linkk" href="./hostelfeat/hostel14.html">
                                <div id="room-04">
                                    <i class="fas fa-expand-alt expand"></i>
                                </div>
                            </a>
                        </div>
                        <div class="writings">
                            <p class="tit">White Hostel</p>
                            <p style="font-style:italic;"><i class="las la-map-marker"></i>Akalima adjacent AGCM</p>
                            <p>Mix</p>
                        </div>
                    </div>

                    <div class="rooms">
                        <div class="image" id="room-15-image" style="background-image:url(images/bd15.jpeg)">
                            <a class="linkk" href="./hostelfeat/hostel15.html">
                                <div id="room-05">
                                    <i class="fas fa-expand-alt expland"></i>
                                </div>
                            </a>
                        </div>
                        <div class="writings">
                            <p class="tit">Sama Hostel</p>
                            <p style="font-style:italic;"><i class="las la-map-marker"></i>New Site</p>
                            <p>Mix</p>
                        </div>
                    </div>

                </div>

            </div>

        </section>

        <section class="ratings">
            <h2>Reviews</h2>
            <div class="wrapper">
                <?php
                if (mysqli_num_rows($fetchRating)) {
                    while ($Reviewresult = mysqli_fetch_assoc($fetchRating)) {
                        $Rname = $Reviewresult['name'];
                        $Rmessage = $Reviewresult['message'];
                        $Rrating = $Reviewresult['rating'];
                        $rate = "";

                        if ($Rrating === "5") {
                            $rate = "<i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>";
                        } else if ($Rrating === "4") {
                            $rate = "<i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>";
                        } else if ($Rrating === "3") {
                            $rate = "<i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>";
                        } else if ($Rrating === "2") {
                            $rate = "<i class='las la-star'></i><i class='las la-star'></i>";
                        } else if ($Rrating === "1") {
                            $rate = "<i class='las la-star'></i>";
                        }

                        echo "<div class='tile'>
                                <h3>$Rname</h3>
                                <p class='message'>
                                $Rmessage
                                </p>
                                <div class='stars'>
                                    $rate
                                </div>
                            </div>";
                    }
                }
                ?>

            </div>
        </section>
        </main>

        <div class="back">
            <a href="#"><i class="fas fa-arrow-circle-up"></i></a>
        </div>

        <footer>
            <p>Room Link&copy; | 2022 Copyright</p>
        </footer>
    </div>
</body>

</html>