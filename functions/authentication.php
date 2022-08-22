<?php

session_start();

include_once('db_connection.php');

function AuthenticateUser($username, $password)
{
    $conn = Connection();

    $sqlUser = "SELECT * FROM user_tbl WHERE user_name = '$username';";

    $sqlResult = mysqli_query($conn, $sqlUser);

    $newPwd = md5($password);

    $nor = mysqli_num_rows($sqlResult);

    $rec = mysqli_fetch_assoc($sqlResult);

    if ($nor > 0) {

        if ($newPwd == $rec['user_password']) {

            if ($rec['user_status'] == 1) {

                $_SESSION['user_id']            = $rec['user_id'];
                $_SESSION['user_display_name']  = $rec['user_display_name'];
                $_SESSION['user_name']          = $rec['user_name'];
                $_SESSION['user_status']        = $rec['user_status'];

                header("location:pages/dashboard.php");
                
            }
            
        } else {
            return ('Incorrect Username or Password!');
        }
    } else {
        return ("No user record found");
    }
}
