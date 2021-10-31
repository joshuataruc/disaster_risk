<?php 
session_start();
include_once '../db/connection.php';
echo $rescuer = $_SESSION['admin_id'];
$respond_time = date("h:i:s a");


if(isset($_POST['rescue_btn'])){
    $id = $_POST['sos_id'];
    
    $respond = "UPDATE notification SET responded_by = '$rescuer', time_responded = '$respond_time' WHERE notif_id = '$id'  ";
    $respond_query = mysqli_query($con, $respond) or die($con->error);
    if($respond_query){
        $_SESSION['flash'] = ' <i class="far fa-check-circle"></i> You accepted the rescue request';
        header("Location: notif.php");
    }
    else{
         $_SESSION['flash-error'] = ' <i class="fas fa-exclamation-triangle"></i> Something went Wrong Try Again';
            header("Location: notif.php");
            
    }
}
else{
    header("Location: logout.php");
}