<?php

function Connection()
{
    $server = "localhost";
    $user = "root";
    $pwd = "";
    $database = "seaside_lodge_db";


    $conn = mysqli_connect($server, $user, $pwd, $database);

    if (mysqli_connect_errno($conn)) {
        return ("Connection Error");
    } else {
        return ($conn);
    }
}
