<?php
session_start();

if ($_SESSION['username'] && $_SESSION['user_id']) {
} else {
    echo "<script type='text/javascript'>alert('You need to LOGIN')</script>";
    header('location:login.php');
}
$_SESSION['user_id'];
$_SESSION['fname'];
$_SESSION['mname'];
$_SESSION['lname'];
$_SESSION['cont_num'];
$_SESSION['username'];
$_SESSION['address'];
