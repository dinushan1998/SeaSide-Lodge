<?php

date_default_timezone_set('Asia/Colombo');

include_once('db_connection.php');

function PlaceInquiry($firstname, $lastname, $mail, $phone, $subject, $message)
{
    $conn = Connection();

    $t = time();

    $datetime = date("Y-m-d h:m:s", $t);

    $sql_insert = "INSERT INTO inquiries_tbl (inq_first_name, inq_last_name, inq_email, inq_contact, inq_subject, inq_message, inq_create_date, inq_status)
                    VALUES ('$firstname','$lastname','$mail','$phone','$subject','$message','$datetime',1);";

    $sql_result = mysqli_query($conn, $sql_insert);

    if ($sql_result > 0) {
        return "success";
    } else {
        return "Error, Try again !!";
    }
}

function InquiryList()
{
    $conn = Connection();

    $view_sql = "SELECT * FROM inquiries_tbl ORDER BY inq_create_date DESC;";

    $view_result = mysqli_query($conn, $view_sql);
    
    $nor = mysqli_num_rows($view_result);

    if ($nor > 0) {

        while ($rec = mysqli_fetch_assoc($view_result)) {

            echo ("<tr>
                    <td>" . $rec['inq_create_date'] . "</td>
                    <td>" . $rec['inq_id'] . "</td>
                    <td>" . $rec['inq_first_name'] . " " . $rec['inq_last_name'] . "</td>
                    <td>" . $rec['inq_email'] . "</td>
                    <td>" . $rec['inq_contact'] . "</td>
                    <td><u><b>" . $rec['inq_subject'] . "</b></u><br>" . $rec["inq_message"] . "</td>
                </tr>");
        }
    } else {
        return (" No record found");
    }
}
