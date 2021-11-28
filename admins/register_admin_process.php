<?php
session_start();
include_once '../db/connection.php';

$created_at = date("Y/m/d h:i:s a");

$fname = mysqli_real_escape_string($con, $_POST['fname']);
$midname = mysqli_real_escape_string($con, $_POST['midname']);
$lname = mysqli_real_escape_string($con, $_POST['lname']);
$username = mysqli_real_escape_string($con, $_POST['username']);
$rescue_type = mysqli_real_escape_string($con, $_POST['rescue_type']);
$dob = mysqli_real_escape_string($con, $_POST['dob']);
$cont_num = mysqli_real_escape_string($con, $_POST['cont_num']);
$address = mysqli_real_escape_string($con, $_POST['address']);
$password = mysqli_real_escape_string($con, md5($_POST['password']));


$username_exist = "SELECT * FROM admins WHERE username = '$username'";
$username_query = mysqli_query($con, $username_exist) or die($con->error);
if (mysqli_num_rows($username_query) > 0) {
    $_SESSION['flash-error'] = ' <i class="fas fa-exclamation-triangle"></i>  Username Already Exist';
   header("Location: admins.php");
} else {
    $insert_user = "INSERT INTO admins(fname, mname, lname, username, date_of_birth, cont_num, address, password, created_at, rescue_type ) VALUES ('$fname', '$midname', '$lname', '$username', '$dob', '$cont_num', '$address', '$password', '$created_at', '$rescue_type')";
    if (mysqli_query($con, $insert_user) === true) {
        $_SESSION['flash-success'] = ' <i class="far fa-check-circle"></i>  Account Registered';
        header("Location: admins.php");
    } else {
        die($con->error);
    }
}
