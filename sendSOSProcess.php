<?php
session_start();
include_once 'db/connection.php';
date_default_timezone_set("Asia/Singapore");
$created_at = date("Y/m/d h:i:s a");
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];
$cont_num = $_SESSION['cont_num'];
$address = $_SESSION['address'];
$user_id = $_SESSION['user_id'];

if (isset($_POST['brgyBtn'])) {
    $sosType = 'Barangay';
}
if (isset($_POST['policeBtn'])) {
    $sosType = 'Police';
}
if (isset($_POST['hospitalBtn'])) {
    $sosType = 'Hospital';
}
if (isset($_POST['fireBtn'])) {
    $sosType = 'Fire';
}


$sendSOS = "INSERT INTO notification (sender_fname,	sender_lname, address, sender_contact_num, sos_type, created_at, sender_id)  VALUES ('$fname', '$lname', '$address', '$cont_num', '$sosType', '$created_at', '$user_id')";
if (mysqli_query($con, $sendSOS) === true) {
    header('location:notif.php');
} else {
    die($con->error);
}
