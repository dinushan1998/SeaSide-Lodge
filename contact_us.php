<?php

include_once("header.php");

include_once('functions/inquiries.php');

if (isset($_POST['first_name']) && isset($_POST['inq_contact'])) {

    $result = PlaceInquiry($_POST["first_name"], $_POST["last_name"], $_POST["inq_email"], $_POST["inq_contact"], $_POST["inq_subject"], $_POST["inq_message"]);
}
?>

<style>
    body {
        margin: 0;
        font-family: Garamond;
        color: rgb(80, 54, 6);
    }

    .row {
        display: flex;
    }

    h1,
    h2 {
        color: rgb(163, 111, 14);
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
        background-image: linear-gradient(rgb(253, 210, 130), rgb(221, 170, 75));
        color: rgb(84, 55, 2);
        ;
    }

    .body_content {
        padding-top: 3rem;
        margin-bottom: 100px;
        text-align: center;
    }

    #hotel_intro_caption {

        padding-left: 100px;
        padding-right: 100px;
        text-align: center;
        font-size: 20px;
    }

    #footer {
        background-color: rgb(255, 243, 220);
    }

    .quick_access {
        text-decoration: none;
        color: rgb(21, 87, 107);
    }

    .input_text_style {
        width: 100%;
        margin-top: 5px;
        padding: 10px;
    }

    input[type="text"],
    textarea {
        font-family: Garamond;
        font-size: 20px;
    }

    span {
        color: red;
        font-size: 15px;
    }

    #form_submit_button {
        font-family: Garamond;
        background-image: linear-gradient(rgb(253, 210, 130), rgb(221, 170, 75));
        margin-right: -20px;
        padding-left: 35px;
        padding-right: 35px;
        border: none;
    }

    #form_submit_button:hover {
        background-image: linear-gradient(rgb(221, 170, 75), rgb(253, 210, 130));
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
        <a class="navbar_tabs" href="about_us.php">About Us</a>
        <a class="navbar_tabs active" href="contact_us.php">Contact Us</a>

        <div class="float-right">
            <a class="navbar_tabs" href="sign_in.php">Login</a>
        </div>
    </div>
    <!-- NAVIGATION BAR -->

    <!-- MAIN BODY CONTENT -->
    <div class="body_content">

        <br>
        <h1 style="text-align: center; font-size: 45px;">Feel free to contact us anytime!</h1>

        <img src="img/contact_us_banner.png" alt="Main Banner #1" style="width: 80%; text-align: center;">

        <p id="hotel_intro_caption">
            Wish to know more about our SeaSide Lodge? Or inquire regarding offers and facilities we
            provide? Whatever your questions might be, we are delighted to enlighten you!
            Please Fill out the form below and we will get in touch with you soon.
            You could also reach out to us directly through any of our hotline numbers!
        </p>

        <div style="background-color: rgb(255, 243, 220); padding-top: 10px; padding-bottom: 40px;">
            <h1 style="text-align: center;">Don't hesitate to contact us for inquiries</h1>
            <p id="hotel_intro_caption">
                Contact us for the perfect weekend getaway or to preplan your lovely wedding. We keep you updated on all
                the latest offers coming up seasonally!
            </p>

            <br>

            <form id="inquiry_form" action="<?php echo ($_SERVER['PHP_SELF']) ?>" method="POST" style="text-align: left; padding-left: 100px; padding-right: 30px;">
                <div class="row">
                    <div style="width: 10%;">
                        <h3>First Name&nbsp;<span>*</span></h3>
                    </div>
                    <div style="width: 30%;">
                        <input type="text" name="first_name" id="first_name" class="input_text_style" placeholder="Enter First Name" required>
                    </div>
                    <div style="width: 10%;"></div>
                    <div style="width: 10%;">
                        <h3>Last Name</h3>
                    </div>
                    <div style="width: 30%;">
                        <input type="text" name="last_name" id="last_name" class="input_text_style" placeholder="Enter Last Name">
                    </div>
                </div>
                <div class="row">
                    <div style="width: 10%;">
                        <h3>Email</h3>
                    </div>
                    <div style="width: 30%;">
                        <input type="email" name="inq_email" id="inq_email" class="input_text_style" placeholder="Enter Email Address">
                    </div>
                    <div style="width: 10%;"></div>
                    <div style="width: 10%;">
                        <h3>Contact&nbsp;<span>*</span></h3>
                    </div>
                    <div style="width: 30%;">
                        <input type="text" name="inq_contact" id="inq_contact" onchange="checkNumber()" class="input_text_style" placeholder="Enter Contact Number" required>
                        <p id="invalid"></p>
                    </div>
                </div>
                <div class="row">
                    <div style="width: 10%;">
                        <h3>Subject</h3>
                    </div>
                    <div style="width: 80%;">
                        <input type="text" name="inq_subject" id="inq_subject" class="input_text_style" placeholder="Enter Message Subject">
                    </div>
                    <div style="width: 10%;"></div>
                </div>
                <div class="row">
                    <div style="width: 10%;">
                        <h3>Message</h3>
                    </div>
                    <div style="width: 80%;">
                        <textarea rows="3" class="input_text_style" name="inq_message" id="inq_message" placeholder="Enter Your Message"></textarea>
                    </div>
                    <div style="width: 10%;"></div>
                </div>
                <br>
                <div class="row">
                    <div style="width: 10%;">
                    </div>
                    <div style="width: 80%; text-align: right;">
                        <button id="form_submit_button" type="submit">
                            <h2 style="color: rgb(92, 63, 10);">Place Inquiry</h2>
                        </button>
                    </div>
                    <div style="width: 10%;"></div>
                </div>
            </form>
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

<script>
    function checkNumber() {

        var contact_number = document.getElementById('inq_contact').value;

        if (contact_number.length !== 10) {
            document.getElementById("invalid").innerHTML = "invalid contact number";
        }else{
            document.getElementById("invalid").innerHTML = "";
        }

    }
</script>