<?php

session_start();

if (isset($_SESSION['user_id'])) {

    include_once("../header.php");

?>

    <style>
        * {
            font-family: Garamond;
        }

        body {
            margin: 0;
            color: #503606;
        }

        .row {
            display: flex;
        }

        h1,
        h2,
        h3 {
            color: #855a09;
        }

        button:hover {
            cursor: pointer;
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

        .main_btn {
            font-family: Garamond;
            background-image: linear-gradient(#fdd282, #ddaa4b);
            margin-right: -20px;
            padding-left: 35px;
            padding-right: 35px;
            border: none;
            width: 100%;
        }

        .main_btn:hover {
            background-image: linear-gradient(#ddaa4b, #fdd282);
        }

        .row {
            display: flex;
            padding: 10px;
        }

        .row_custom {
            display: flex;
        }

        table,
        th,
        td {
            border: 2px solid black;
        }
    </style>

    <body>

        <div class="page-content" style="margin-top: 25px;">

            <div class="row">

                <div style="width: 1%; padding: 10px; text-align: center;"></div>

                <div style="width: 34%; padding: 10px; text-align: center;">
                    <img src="../img/Logo.png" alt="Logo" style="width: 100%;" />
                    <h2 style="margin-top: -20px;">• INQUIRIES •</h2>
                </div>

                <div style="width: 15%; padding: 10px; text-align: center;"></div>

                <div style="width: 60%; padding: 10px;">

                    <div class="row">

                        <div style="width: 50%; padding: 10px;"></div>

                        <div style="width: 50%; padding: 10px;">
                            <a href="../functions/logout.php" style="text-decoration: none;">

                                <!-- logout button  -->
                                <button type="button" class="main_btn">
                                    <h3>LOGOUT</h3>
                                </button>
                            </a>
                        </div>

                    </div>

                </div>

            </div>

            <div class="row">

                <div style="width: 1%; padding: 10px;"></div>

                <div style="width: 98%; padding: 10px;">
                    <table id="inquiry_list" style="width: 100%;">
                        <thead style="text-align: center; border: 2px solid black;">
                            <tr>
                                <th style='text-align: center;'>Date Added</th>
                                <th style='text-align: center;'>Inq. No.</th>
                                <th style='text-align: center;'>Name</th>
                                <th style='text-align: center;'>Email</th>
                                <th style='text-align: center;'>Contact</th>
                                <th style='text-align: center;'>Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once("../functions/inquiries.php");
                            InquiryList();
                            ?>
                        </tbody>
                    </table>
                </div>

                <div style="width: 1%; padding: 10px;"></div>

            </div>

        </div>

    </body>

    </html>

<?php

} else {

    include_once("../header.php");

?>

    <style>
        body {
            margin: 0;
            font-family: Garamond;
            color: #503606;
        }

        input[type=text],
        input[type=password] {
            font-family: Garamond;
            font-size: 18px;
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #906014;
            box-sizing: border-box;
        }

        button {
            font-family: Garamond;
            font-size: 18px;
            background-color: #906014;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }
    </style>

    <body style="margin-left: 30%; margin-top: 5%;">

        <div class="container" style="width: 50%; border: 5px solid #906014; text-align: center;">

            <img src="../img/Logo.png" alt="Logo" style="width: 100%; text-align: center;" />

            <br>

            <h1>LOGIN ERROR!</h1>

            <a href="../sign_in.php" style="text-decoration: none;">
                <button>Back to Login Page</button>
            </a>

        </div>

    </body>

    </html>

<?php
}
?>