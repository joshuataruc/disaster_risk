<?php 
session_start();
include_once '../db/connection.php';

if (isset($_POST['upd_users'])) {
	echo $id = htmlspecialchars($_POST['id']);
	$fname = htmlspecialchars($_POST['fname']);
	$midname = htmlspecialchars($_POST['midname']);
	$lname = htmlspecialchars($_POST['lname']);
	$username = htmlspecialchars($_POST['username']);
	$dob = htmlspecialchars($_POST['dob']);
	$cont_num = htmlspecialchars($_POST['cont_num']);
	$address = htmlspecialchars($_POST['address']);
	$password = htmlspecialchars(md5($_POST['password']));


	if (empty($password)) {
		$update_users = "UPDATE admins SET username = '$username', fname = '$fname', lname = '$lname',	mname = '$midname', date_of_birth = '$dob', address = '$address', cont_num = '$cont_num' WHERE admin_id = '$id'";
        $update_query = mysqli_query($con, $update_users) or die($con->error);
		if ($update_query) {
            $_SESSION['flash-success'] = ' <i class="far fa-check-circle"></i> '. ucfirst($username).'  Account Updated';
			header("Location: admins.php");
		}
		else{
			$_SESSION['flash-error'] = ' <i class="fas fa-exclamation-triangle"></i> '.ucfirst($username).'  Account not Updated';
            header("Location: admins.php");
		}
	}
	else{
	$update_users = "UPDATE admins SET username = '$username', password = '$password', fname = '$fname', lname = '$lname', mname = '$midname', date_of_birth = '$dob', address = '$address', cont_num = '$cont_num' WHERE admin_id = '$id'";
		$update_query = mysqli_query($con, $update_users) or die($con->error);
		if ($update_query) {
            $_SESSION['flash-success'] = ' <i class="far fa-check-circle"></i> '.ucfirst($username).'  Account Updated';
			header("Location: admins.php");
		}
		else{
			$_SESSION['flash-error'] = ' <i class="fas fa-exclamation-triangle"></i> '. ucfirst($username).'  Account not Updated';
            header("Location: admins.php");
		}
	}

}

if (isset($_GET['delete_id'])) {
	$id = htmlspecialchars($_GET['delete_id']);
	$delete_user =  "DELETE FROM admins WHERE admin_id = '$id'";
    $delete_user_query = mysqli_query($con, $delete_user) or die($con->error);
	if ($delete_user_query) {
			$_SESSION['flash-success'] = ' <i class="far fa-check-circle"></i>  Account Deleted';
			header("Location: admins.php");
		}
		else{
			$_SESSION['flash-error'] = ' <i class="fas fa-exclamation-triangle"></i>  Error! Account not Deleted';
            header("Location: admins.php");
		}

}
