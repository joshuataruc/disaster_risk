<?php
session_start();
include_once "../db/connection.php";

$username = mysqli_real_escape_string($con, $_POST['username']);
$password = mysqli_real_escape_string($con, md5($_POST['password']));

$check_username = "SELECT * from admins WHERE username = '$username'";
$user_query = mysqli_query($con, $check_username) or die($con->error);

if (mysqli_num_rows($user_query) > 0) {
    $check_password = "SELECT * from admins WHERE username = '$username' && password = '$password'";
    $password_query = mysqli_query($con, $check_password) or die($con->error);
    if (mysqli_num_rows($password_query) > 0) {
        $user_data = mysqli_fetch_assoc($password_query);
        $user_id = $_SESSION['admin_id'] = $user_data['admin_id'];
        $user_fname = $_SESSION['fname'] = $user_data['fname'];
        $user_mname = $_SESSION['mname'] = $user_data['fname'];
        $user_lname = $_SESSION['lname'] = $user_data['lname'];
        $user_cont_num = $_SESSION['cont_num'] = $user_data['cont_num'];
        $user_address = $_SESSION['address'] = $user_data['address'];
        $user_username = $_SESSION['username'] = $user_data['username'];
        $user_address = $_SESSION['address'] = $user_data['address'];
        $user_rescue_type = $_SESSION['rescue_type'] = $user_data['rescue_type'];
        header("Location: notif.php");
    } else {
        $_SESSION['flash-error'] = ' <i class="fas fa-exclamation-triangle"></i>  Username and Password Didnt Match';
        header("Location: login.php");
    }
} else {
    $_SESSION['flash-error'] = '<i class="fas fa-exclamation-triangle"></i>  username didnt exist in out database';
    header("Location: login.php");
}
