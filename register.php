<?php

session_start();
include_once "./dbconnect.php";

$referenceID = substr(number_format(time() * rand(), 0, '', ''), 0, 6);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoomLink | Regist</title>

    <!-----css here----->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/register.css">
</head>

<body>
    <header>
        <div class="logo">
            <img src="images/rll.jpg" width="50px" height="50px" alt="">
            <h2>RoomLink</h2>
        </div>
        <nav>
            <ul class="nav-links">
                <a href="index.php#hostels">
                    <li>Hostels</li>
                </a>
                <a href="index.php">
                    <li>Home</li>
                </a>
                <a href="about.html#contact">
                    <li>contact</li>
                </a>
                <a href="about.html">
                    <li>About</li>
                </a>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
    </header>


    <div class="container">
        <span class="title">Register</span>
        <form action="form.php" method="post">
            <?php if (isset($_SESSION['error'])) {
                echo $_SESSION['error'];
                unset($_SESSION['error']);
            } ?>
            <div class="mega-field">
                <div class="field">
                    <label for="firstname">firstname</label>
                    <input type="text" id="firstname" name="firstname" required>
                </div>

                <div class="field">
                    <label for="lastname">Lastname</label>
                    <input type="text" id="lastname" name="lastname" required>
                </div>

            </div>

            <div class="field">
                <label for="index num">Index number</label>
                <input type="number" id="index num" name="indexnum" required>
            </div>

            <div class="field">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" required>
            </div>

            <div class="field">
                <label for="mobile">Telephone number</label>
                <input type="mobile" id="mobile" name="mobile" maxlength="10" required>
            </div>

            <fieldset>
                <legend>Gender</legend>

                <div class="r-field">
                    <label for="male">Male</label>
                    <input type="radio" id="male" name="gender" value="male">
                </div>

                <div class="r-field">
                    <label for="female">Female</label>
                    <input type="radio" id="female" name="gender" value="female">
                </div>

                <div class="r-field">
                    <label for="other">Other</label>
                    <input type="radio" id="other" name="gender" value="other">
                </div>
            </fieldset>

            <div class="mega-field">
                <div class="field">
                    <label for="hostelname">Hostel name</label>
                    <select id="hostelname" name="hostelname">
                        <option value="" disabled selected hidden>Select Hostels</option>
                        <option value="Pink Hostel">Pink Hostel</option>
                        <option value="Windys Hostel">Windys Hostel</option>
                        <option value="Kent Hostel">Kent Hostel</option>
                        <option value="Stamford Hostel">Stamford Hostel</option>
                    </select>
                </div>

                <div class="field">
                    <label for="hosteltype">Hostel type</label>
                    <select id="hosteltype" name="hosteltype">
                        <option value="" disabled selected hidden>Select Hostels Type</option>
                        <option value="male hostel">Male Hostel</option>
                        <option value="female hostel">Female Hostel</option>
                        <option value="mixed hostel">Mixed Hostel</option>
                    </select>
                </div>
            </div>

            <div class="field">
                <label for="hostelname">Room Type</label>
                <select id="hostelname" name="price">
                    <option value="" disabled selected hidden>Select Room Type</option>
                    <option value="1800">1 in a room = GH&#8373 1800</option>
                    <option value="3600">2 in a room = GH&#8373 3600</option>
                    <option value="5400">3 in a room = GH&#8373 5400</option>
                    <option value="7200">4 in a room = GH&#8373 7200</option>
                </select>
            </div>

            <div class="title-sub" style="border-bottom: 1px solid #3333; width: 100%;padding-bottom: 5px;text-align: center;margin-top: 10px;">
                <h4>Payment Method</h4>
            </div>
            <div class="recepient">
                <p>Momo Name:</p>
                <h3>Roomlink</h3>
            </div>
            <div class="recepient">
                <p>Momo Number:</p>
                <h3>0245671965</h3>
            </div>
            <div class="recepient">
                <p>Reference Code:</p>
                <h3><?php echo $referenceID ?></h3>
                <input type="hidden" value="<?php echo $referenceID ?>" name="refID">
            </div>

            <div class="c-field">
                <input type="checkbox" name="terms" value="accepted" id="" class="check" required />
                <p>I agree to the <a href=""> terms and conditions</a> </p>
            </div>
            <br>
            <div class="button">
                <button>Payed, Notify Admin</button>
            </div>

        </form>


    </div>


    <?php
    if (isset($_SESSION['success'])) {
        echo $_SESSION['success'];
        unset($_SESSION['success']);
    }
    ?>


    <footer>
        <p>RoomLink&copy; | 2022 Copyright</p>
    </footer>

    <script>
        const star1 = document.getElementById('1');
        const star2 = document.getElementById('2');
        const star3 = document.getElementById('3');
        const star4 = document.getElementById('4');
        const star5 = document.getElementById('5');


        star5.onclick = function() {
            star1.classList.add('active')
            star2.classList.add('active')
            star3.classList.add('active')
            star4.classList.add('active')
            star5.classList.add('active')
            document.getElementById('rating').value = "5";
        }
        star4.onclick = function() {
            star1.classList.add('active')
            star2.classList.add('active')
            star3.classList.add('active')
            star4.classList.add('active')
            star5.classList.remove('active')
            document.getElementById('rating').value = "4";
        }
        star3.onclick = function() {
            star1.classList.add('active')
            star2.classList.add('active')
            star3.classList.add('active')
            star4.classList.remove('active')
            star5.classList.remove('active')
            document.getElementById('rating').value = "3";
        }
        star2.onclick = function() {
            star1.classList.add('active')
            star2.classList.add('active')
            star3.classList.remove('active')
            star4.classList.remove('active')
            star5.classList.remove('active')
            document.getElementById('rating').value = "2";
        }
        star1.onclick = function() {
            star1.classList.add('active')
            star2.classList.remove('active')
            star3.classList.remove('active')
            star4.classList.remove('active')
            star5.classList.remove('active')
            document.getElementById('rating').value = "1";
        }
    </script>

</body>

</html>