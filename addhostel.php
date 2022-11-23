<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoomLink | Home</title>

    <!-----css here----->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="css/addhostel.css">
</head>

<body>
    <header>
        <div class="logo">
            <img src="images/rll.jpg" width="50px" height="50px" alt="">
            <h2>RoomLink</h2>
        </div>

        <nav>
            <ul class="nav-links">

                <a href="index.php">
                    <li>Home</li>
                </a>
                <a href="about.html#contact">
                    <li>contact</li>
                </a>
                <a href="about.html">
                    <li>About</li>
                </a>
                <a href="login.php">
                    <li>Login</li>
                </a>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
    </header>
    <!--<main>-->
    <div class="container">
        <span class="title">Register Hostel</span>
        <form action="addhostelP.php" method="post" enctype="multipart/form-data">
            <div class="pic-field">
                <div class="picture">
                    <img src="./img/profileDefault.jpg" id="profileDisplay" alt="">
                    <label for="hostelPic"></label>
                </div>
                <input type="file" name="file" onchange="displayImage(this)" id="hostelPic" hidden>
                <p>Upload Hostel Picture</p>
            </div>
            <div class="field">
                <label for="hostelName">Hostel Name</label>
                <input type="text" name="hostelName" id="hostelName" placeholder="Name of Hostel" />
            </div>
            <div class="field">
                <label for="hostelLocation">Hostel Location</label>
                <input type="text" name="hostelLocation" id="hostelLocation" placeholder="Location of Hostel" />
            </div>
            <div class="field">
                <label for="hostelType">Hostel Type</label>
                <input type="text" name="hostelType" id="hostelType" placeholder="Type of Hostel" />
            </div>
            <div class="type-field">
            <label class="label">Select Room Type</label>
                <select name="roomtype1">
                    <option value="NULL" selected disabled hidden>Select Room Type</option>
                    <option value="1 in a room">1 in a room</option>
                    <option value="2 in a room">2 in a room</option>
                    <option value="3 in a room">3 in a room</option>
                    <option value="4 in a room">4 in a room</option>
                </select>
                <input type="text" name="price1" placeholder="Price (&#8373)">
            </div>
            <div class="type-field">
                <select name="roomtype2">
                    <option value="NULL" selected disabled hidden>Select Room Type</option>
                    <option value="1 in a room">1 in a room</option>
                    <option value="2 in a room">2 in a room</option>
                    <option value="3 in a room">3 in a room</option>
                    <option value="4 in a room">4 in a room</option>
                </select>
                <input type="text" name="price2" placeholder="Price (&#8373)">
            </div>
            <div class="type-field">
                <select name="roomtype3">
                    <option value="NULL" selected disabled hidden>Select Room Type</option>
                    <option value="1 in a room">1 in a room</option>
                    <option value="2 in a room">2 in a room</option>
                    <option value="3 in a room">3 in a room</option>
                    <option value="4 in a room">4 in a room</option>
                </select>
                <input type="text" name="price3" placeholder="Price (&#8373)">
            </div>
            <div class="type-field">
                <select name="roomtype4">
                    <option value="NULL" selected disabled hidden>Select Room Type</option>
                    <option value="1 in a room">1 in a room</option>
                    <option value="2 in a room">2 in a room</option>
                    <option value="3 in a room">3 in a room</option>
                    <option value="4 in a room">4 in a room</option>
                </select>
                <input type="text" name="price4" placeholder="Price (&#8373)">
            </div>
            <div class="button">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
    </div>
    </main>
    <div class="back">
        <a href="#"><i class="fas fa-arrow-circle-up"></i></a>
    </div>

    <footer>
        <p>Room Link&copy; | 2022 Copyright</p>
    </footer>
    <!--</main>-->

    <!-- scripts -->

    <script>
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