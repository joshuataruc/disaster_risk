<?php
session_start();
date_default_timezone_set("Asia/Singapore");
include_once '../db/connection.php';
$rescuer = $_SESSION['admin_id'];
$respond_time = date("h:i:s a");


if (isset($_POST['rescue_btn'])) {
    $id = $_POST['sos_id'];

    $search_data = "SELECT * FROM notification WHERE notif_id = '$id'";
    $search_query = mysqli_query($con, $search_data) or die($con->error);
    if (mysqli_num_rows($search_query) > 0) {
        $row = $search_query->fetch_assoc();
        $sender_id =  $row['sender_id'];
        $fname =  $row['sender_fname'];
        $sender_lname =  $row['sender_lname'];
        $address =  $row['address'];
        $sender_contact_num =  $row['sender_contact_num'];
        $sos_type =  $row['sos_type'];
        $created_at =  $row['created_at'];

        $insert_report = "INSERT INTO sos_reports(sender_id, sender_fname, sender_lname, address, sender_contact_num, sos_type, responded_by, created_at, time_responded) VALUES 
         ('$sender_id', '$fname','$sender_lname','$address','$sender_contact_num','$sos_type','$rescuer','$created_at','$respond_time') ";
        $report_query = mysqli_query($con, $insert_report) or die($con->error);
        if ($report_query) {
            $delete_notif = "DELETE FROM notification WHERE notif_id = '$id'";
            $delete_query = mysqli_query($con, $delete_notif) or die($con->error);
            if($delete_query){
            $_SESSION['flash'] = ' <i class="far fa-check-circle"></i> You accepted the rescue request';
            header("Location: notif.php");
            }
            else{
                 $_SESSION['flash-error'] = ' <i class="fas fa-exclamation-triangle"></i> Something went Wrong Try Again';
                header("Location: notif.php");
            }
        } else {
            $_SESSION['flash-error'] = ' <i class="fas fa-exclamation-triangle"></i> Something went Wrong Try Again';
            header("Location: notif.php");
        }
    } else {
        header("Location: logout.php");
    }

}
