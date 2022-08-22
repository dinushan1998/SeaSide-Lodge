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
        <a class="navbar_tabs active" href="index.php">Home</a>
        <a class="navbar_tabs" href="about_us.php">About Us</a>
        <a class="navbar_tabs" href="contact_us.php">Contact Us</a>

        <div class="float-right">
            <a class="navbar_tabs" href="sign_in.php">Login</a>
        </div>
    </div>
    <!-- NAVIGATION BAR -->

    <!-- MAIN BODY CONTENT -->
    <div class="body_content">

        <!-- MAIN BANNER WITH DESCRIPTION -->
        <div class="row">
            <img src="img/main_banner.png" alt="Main Banner #1" style="width: 100%;">
        </div>
        <h1 style="text-align: center; font-size: 45px;">Welcome to SeaSide Lodge, Colombo!</h1>
        <p id="hotel_intro_caption">
            You know…the kind where you lay your body down on a lounge chair for a week straight and deep dive into that
            summer beach read that may or may not have been from the Young Adult section of your local library.
            Beach Rules: Soak up the sun. Ride the waves. Breathe the salty air. Feel the breeze. Build sandcastles.
            Rest, relax, reflect. Collect seashells. Bare-feet required!
        </p>
        <!-- MAIN BANNER WITH DESCRIPTION -->

        <!-- VIEWS AND FEATURES -->
        <div class="row" style="text-align: center;">
            <div style="width: 33.33%;">
                <div style="padding: 50px;">
                    <img src="img/home_image_3.png" alt="SeaSide Lodge #3" style="width: 100%;">
                    <br>
                    <h2>Glorius Pool...</h2>
                    <p>Get those pool vibes and tan lines with the Glorius waters of Sri Lanka.</p>
                </div>
            </div>
            <div style="width: 33.33%;">
                <div style="padding: 50px;">
                    <img src="img/home_image_6.png" alt="SeaSide Lodge #6" style="width: 100%;">
                    <br>
                    <h2>Into the Sunset...</h2>
                    <p>Enjoy the evenings with a soothing kabana and dinner experiencing the great wonders of Sri Lanka.
                    </p>
                </div>
            </div>
            <div style="width: 33.33%;">
                <div style="padding: 50px;">
                    <img src="img/home_image_5.png" alt="SeaSide Lodge #5" style="width: 100%;">
                    <br>
                    <h2>Mind-blowing Scenery...</h2>
                    <p>Relive the cilling winds at the heart of Colombo with an amazing view</p>
                </div>
            </div>
        </div>
        <!-- VIEWS AND FEATURES -->

        <!-- WHY US SECTION -->
        <h1 style="text-align: center;">Why select SeaSide Lodge?</h1>
        <p id="hotel_intro_caption">
            We are widely recognized around the island and overseas for the quality of the
            service we provide to our beloved guests. Our lodge inludes from a range from delicious foods to wedding
            plannings!
        </p>

        <!-- Finest Dining & Restaurant -->
        <div class="row" style="text-align: left;">
            <div style="width: 45%;">
                <div style="padding: 30px;">
                    <img src="img/home_image_7.png" alt="SeaSide Lodge #7" style="width: 100%;">
                </div>
            </div>
            <div style="width: 55%;">
                <div style="padding: 30px;">
                    <h1>Finest Dining & Restaurant</h1>
                    <p style="font-size: 20px;">Enjoy your dinings with mouth-watering savours in our open-air themed
                        restaurant and bar along
                        with a
                        variety of international favourites as your heart beats to the rhythm of the Sri Lankan vibe.
                    </p>
                    <p style="font-size: 20px;">We also provide your favorite items through out take-away services
                        directly from our restaurant.
                        Deliveries can be arranged within 5km of our premises.</p>
                </div>
            </div>
        </div>
        <!-- Finest Dining & Restaurant -->

        <!-- Luxurious Rooms -->
        <div class="row" style="text-align: right;">
            <div style="width: 55%;">
                <div style="padding: 30px;">
                    <h1>Luxurious Rooms</h1>
                    <p style="font-size: 20px;">
                        Our Delux suites are one of the ultimate in luxury island living and offers priceless views of
                        the Indian Ocean from every corner of your luxury retreat. The airy rooms provide an ideal haven
                        for guests, with the overlooking scenery.
                    </p>
                    <p style="font-size: 20px;">
                        We now have the previledge to provide our guests with the option to</br>'Book-first Pay-later'
                        for easy and trusted reservations!</p>
                </div>
            </div>
            <div style="width: 45%;">
                <div style="padding: 30px;">
                    <img src="img/home_image_9.png" alt="SeaSide Lodge #9" style="width: 100%;">
                </div>
            </div>
        </div>
        <!-- Luxurious Rooms -->

        <!-- Weddings & Parties -->
        <div class="row" style="text-align: left;">
            <div style="width: 45%;">
                <div style="padding: 30px;">
                    <img src="img/home_image_8.png" alt="SeaSide Lodge #8" style="width: 100%;">
                </div>
            </div>
            <div style="width: 55%;">
                <div style="padding: 30px;">
                    <h1>Weddings & Parties</h1>
                    <p style="font-size: 20px;">Enjoy our fully-equipped spaces with customisable menus and profesional
                        event planning at SeaSide
                        Lodge. We comprise of 3 Banquet Halls; each designed to accommodate your needs. Our halls can
                        provide accomations varying from 190 persons to a maximum of 500 people which can be ideal
                        venues for weddings, parties, banquets and corporate events.
                    </p>
                    <p style="font-size: 20px;">Feel free to contact any of our staff to reserve your bookings as soon
                        as possible!</p>
                </div>
            </div>
        </div>
        <!-- Weddings & Parties -->

        <!-- WHY US SECTION -->

        <!-- END SECTION -->
        <br>
        <h1 style="text-align: center;">We welcome you all to our lovely lodge!</h1>
        <p id="hotel_intro_caption">
            Visit us for the perfect weekend getaway or enjoy your lovely wedding. We keep you updated on all the latest
            offers coming up seasonally!
        </p>
        <br>
        <div style="text-align: center;">
            <a href="contact_us.php">
                <button id="contact_us" type="button">
                    <h2 style="color: rgb(92, 63, 10);">Contact Us For Inquiries</h2>
                </button>
            </a>
        </div>
        <!-- END SECTION -->
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