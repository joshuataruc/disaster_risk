<?php
session_start();
include_once '../db/connection.php';

$created_at = date("Y/m/d h:i:s a");

if(isset($_POST['login'])){
    $event_title = mysqli_real_escape_string($con, $_POST['event_title']);
$event_details = mysqli_real_escape_string($con, $_POST['event_details']);
$event_date = mysqli_real_escape_string($con, $_POST['event_date']);
$event_time = mysqli_real_escape_string($con, $_POST['event_time']);
$event_organizer = mysqli_real_escape_string($con, $_POST['event_organizer']);

$insert_event = "INSERT INTO events (event_title, event_details, event_date, event_time, event_organizer, created_at) VALUES ('$event_title','$event_details','$event_date','$event_time','$event_organizer','$created_at')";
$event_process = mysqli_query($con, $insert_event) or die($con->error);
 if ($event_process) {
        $_SESSION['flash-success'] = ' <i class="far fa-check-circle"></i>  Event Added';
        header("Location: events.php");
    } else {
        $_SESSION['flash-error'] = ' <i class="far fa-check-circle"></i>  Something went Wrong';
        header("Location: events.php");
    }
}
if(isset($_POST['update'])){

$event_id = mysqli_real_escape_string($con, $_POST['event_id']);
$event_title = mysqli_real_escape_string($con, $_POST['event_title']);
$event_details = mysqli_real_escape_string($con, $_POST['event_details']);
$event_date = mysqli_real_escape_string($con, $_POST['event_date']);
$event_time = mysqli_real_escape_string($con, $_POST['event_time']);
$event_organizer = mysqli_real_escape_string($con, $_POST['event_organizer']);

$update_event = "UPDATE events SET event_title =  '$event_title', event_details = '$event_details', event_date = '$event_date' , event_time = '$event_time' , event_organizer = '$event_organizer' WHERE event_id = '$event_id'" ;
$event_process = mysqli_query($con, $update_event) or die($con->error);
 if ($event_process) {
        $_SESSION['flash-success'] = ' <i class="far fa-check-circle"></i>  Event Updated';
        header("Location: events.php");
    } else {
        $_SESSION['flash-error'] = ' <i class="far fa-check-circle"></i>  Something went Wrong';
        header("Location: events.php");
    }
}

if(isset($_GET['delete_id'])){
    $id = htmlspecialchars($_GET['delete_id']);

    $delete_event = "DELETE FROM events WHERE event_id = '$id'";
    $delete_query = mysqli_query($con, $delete_event) or die($con->error);
    if ($delete_query) {
        $_SESSION['flash-success'] = ' <i class="far fa-check-circle"></i>  Event Deleted';
        header("Location: events.php");
    } else {
        $_SESSION['flash-error'] = ' <i class="far fa-check-circle"></i>  Something went Wrong';
        header("Location: events.php");
    }

}