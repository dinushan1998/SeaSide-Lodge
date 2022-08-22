<?php
include_once("header.php");
?>

<style>
    body {
        margin: 0;
        font-family: Garamond;
        color: #503606;
    }

    .row {
        display: flex;
    }

    h1,
    h2 {
        color: #a36f0e;
    }

    .active {
        background-color: #ffdfa3;
        color: #9c6806;
    }

    .float-right {
        float: right;
    }

    #navigation_bar {
        width: 100%;
        box-shadow: 0 4px 4px 0 #0000001a;
        position: fixed;
        overflow: hidden;
        background-image: linear-gradient(#ffffff, #ffffff);
    }

    .logo_tabs {
        float: left;
        text-align: center;
        color: #9c6806;
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 10px;
        text-decoration: none;
        font-size: 20px;
    }

    .navbar_tabs {
        float: left;
        text-align: center;
        color: #9c6806;
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 20px;
        padding-bottom: 20px;
        text-decoration: none;
        font-size: 20px;
    }

    .navbar_tabs:hover {
        background-image: linear-gradient(#fdd282, #ddaa4b);
        color: #543702;
        ;
    }

    .body_content {
        padding-top: 3rem;
        margin-bottom: 100px;
    }

    #hotel_intro_caption {

        padding-left: 100px;
        padding-right: 100px;
        text-align: center;
        font-size: 20px;
    }

    #footer {
        background-color: #fff3dc;
    }

    .quick_access {
        text-decoration: none;
        color: #15576b;
    }

    #contact_us {
        font-family: Garamond;
        background-image: linear-gradient(#fdd282, #ddaa4b);
        margin-right: -20px;
        padding-left: 35px;
        padding-right: 35px;
        border: none;
    }

    #contact_us:hover {
        background-image: linear-gradient(#ddaa4b, #fdd282);
        cursor: pointer;
    }
</style>

<body>

    <!-- NAVIGATION BAR -->
    <div id="navigation_bar">
        <a class="logo_tabs" href="index.php">
            <img src="img/Logo.png" alt="Logo" style="width: 180px;" />
        </a>
        <a class="navbar_tabs" href="index.php">Home</a>
        <a class="navbar_tabs active" href="about_us.php">About Us</a>
        <a class="navbar_tabs" href="contact_us.php">Contact Us</a>

        <div class="float-right">
            <a class="navbar_tabs" href="sign_in.php">Login</a>
        </div>
    </div>
    <!-- NAVIGATION BAR -->

    <!-- MAIN BODY CONTENT -->
    <div class="body_content">

        <br>
        <h1 style="text-align: center; font-size: 45px;">Let us introduce ourselves!</h1>

        <img src="img/about_us_img_4.png" alt="About Us #4" style="width: 90%; text-align: center;">

        <p id="hotel_intro_caption">
            We started our journey drawing inspiration from our country’s glorious waters. Just like its purity and
            colors, we provide the most nourishing and wonderful services in the country.</p>

        <br>
        <h1 style="text-align: center; font-size: 45px;">Glimpse in to our origin!</h1>

        <p id="hotel_intro_caption">
            We established our first hotel in 1975 at Colombo 06 to attract people from around the world to experience
            the
            lovely atmosphere in this beautiful island. SeaSide Lodge has managed to cater and serve over 5,000,000
            customers in over 100 countries to embrace in the wonders of this country.
        </p>

        <img src="img/about_us_img_3.png" alt="About Us #3" style="width: 90%; text-align: center;">

        <br>
        <h1 style="text-align: center; font-size: 45px;">We have amazing reasons for you to stay!</h1>
        <p id="hotel_intro_caption">
            We established our first hotel in 1975 at Colombo 06 to attract people from around the world to experience
            the
            lovely atmosphere in this beautiful island. SeaSide Lodge has managed to cater and serve over 5,000,000
            customers in over 100 countries to embrace in the wonders of this country.
        </p>

        <div class="row" style="text-align: center;">
            <div style="width: 33.33%;">
                <div style="padding: 50px;">
                    <img src="img/about_us_img_7.png" alt="SeaSide Lodge #5" style="width: 100%;">
                    <br>
                    <h2>Embracing the local vibe..</h2>
                    <p>The location, the people, the environment is what makes SeaSide Lodge on of the best places to
                        visit.</p>
                </div>
            </div>
            <div style="width: 33.33%;">
                <div style="padding: 50px;">
                    <img src="img/about_us_img_5.jpg" alt="SeaSide Lodge #3" style="width: 100%;">
                    <br>
                    <h2>The warmth of the waves..</h2>
                    <p>The soothing sound of the waves crashing on to the shore along with the breeze makes the
                        atmosphere lighten up.</p>
                </div>
            </div>
            <div style="width: 33.33%;">
                <div style="padding: 50px;">
                    <img src="img/about_us_img_6.png" alt="SeaSide Lodge #6" style="width: 100%;">
                    <br>
                    <h2>Snaps and Memories..</h2>
                    <p>The memories you make at our lodge and the wonderful time you spend with your loved ones is what
                        makes us heart warming and alive.</p>
                </div>
            </div>
        </div>

        <br>
        <h1 style="text-align: center; font-size: 45px;">And because you mean everything to us...</h1>
        <p id="hotel_intro_caption">
            We provide so many complimentaries to make your time, worth your while!
        </p>

        <div class="row" style="text-align: center;">
            <div style="width: 33.33%;">
                <div style="padding: 50px;">
                    <img src="img/offers_1.png" alt="Offers #1" style="width: 50%;">
                    <br>
                    <h2>Special Offers</h2>
                    <p>We welcome everyone to visit us and make memories. And to make it even more exciting, we provide
                        discounts and special 'first-time coupons' and many along the way!</p>
                </div>
            </div>
            <div style="width: 33.33%;">
                <div style="padding: 50px;">
                    <img src="img/offers_2.png" alt="Offers #2" style="width: 50%;">
                    <br>
                    <h2>Complimentaries</h2>
                    <p>Don't forget to use your coupon to grab a free complimentary beverage at the beach lounge with
                        every reservation!</p>
                </div>
            </div>
            <div style="width: 33.33%;">
                <div style="padding: 50px;">
                    <img src="img/offers_3.png" alt="SeaSide Lodge #6" style="width: 50%;">
                    <br>
                    <h2>Spa & Massages</h2>
                    <p>Book 'Hot Stone Massage' and get an exciting 65% off on your second pick for your loved one! </p>
                </div>
            </div>
        </div>

        <br>
        <h1 style="text-align: center; font-size: 45px;">Feel free to inquire about your stay!</h1>
        <div style="text-align: center;">
            <a href="contact_us.php">
                <button id="contact_us" type="button">
                    <h2 style="color: rgb(92, 63, 10);">Contact Us For Inquiries</h2>
                </button>
            </a>
        </div>

    </div>
    <!-- MAIN BODY CONTENT -->

    <!-- FOOTER SECTION -->
    <div id="footer">
        <div class="row" style="text-align: left; margin-left: 50px;  margin-left: 50px;">
            <div style="width: 33.33%;">
                <h3>SeaSide Lodge, Colombo 06</br>By Wayamba Group of Hotels</h3>
                <p>No. 441,</br>Galle Road,</br>Colombo.</br>00600</p>
                <p>info@seasidelodge.lk</br>077 112 2334 | 071 112 2334</p>
            </div>
            <div style="width: 33.33%; padding-right: 20px;">
                <h3>Quick Access</h3>
                <hr>
                <a class="quick_access" href="index.php">Home</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                <a class="quick_access" href="about_us.php">About Us</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                <a class="quick_access" href="contact_us.php">Contact Us</a>
                <br>
                <hr>
                <h3>Follow us on,</h3>
                <a class="quick_access" href="facebook.com">Facebook</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                <a class="quick_access" href="instagram.com">Instagram</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                <a class="quick_access" href="tripadvisor.com">TripAdvisor</a>
            </div>
            <div style="width: 33.33%; padding: 20px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44816.045436893815!2d79.86231363883002!3d6.864674363852212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25bb5a5074501%3A0x10abff02ca9d350f!2sColombo%2006%2C%20Colombo!5e0!3m2!1sen!2slk!4v1638261998253!5m2!1sen!2slk" style="width:100%; border:3px solid #eee;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
    <!-- FOOTER SECTION -->

</body>

</html>