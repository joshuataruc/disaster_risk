<?php
session_start();
include_once 'db/connection.php';

if (isset($_POST['upd_users'])) {
	$id = htmlspecialchars($_POST['id']);
	$fname = htmlspecialchars($_POST['fname']);
	$midname = htmlspecialchars($_POST['midname']);
	$lname = htmlspecialchars($_POST['lname']);
	$username = htmlspecialchars($_POST['username']);
	$dob = htmlspecialchars($_POST['dob']);
	$cont_num = htmlspecialchars($_POST['cont_num']);
	$address = htmlspecialchars($_POST['address']);
	$password = htmlspecialchars(md5($_POST['password']));

	if (empty($password)) {
		$update_users = "UPDATE users SET username = '$username', fname = 'fname', lname = 'lname',	mname = '$midname', date_of_birth = '$dob', address = '$address', cont_num = '$cont_num' WHERE user_id = '$id'";
		$update_users_query = mysqli_query($con, $update_users) or die($con->error);
		if ($update_users_query) {
			$_SESSION['flash'] = ' <i class="far fa-check-circle"></i> Account Updated';
			header("Location: update_admin_form.php");
		} else {
			$_SESSION['flash-error'] = ' <i class="fas fa-exclamation-triangle"></i> Something went Wrong Try Again';
			header("Location: update_admin_form.php");
		}
	} else {
		$update_users = "UPDATE users SET username = '$username', password = '$password', fname = 'fname', lname = 'lname',	mname = '$midname', date_of_birth = '$dob', address = '$address', cont_num = '$cont_num' WHERE user_id = '$id'";
		$update_users_query = mysqli_query($con, $update_users) or die($con->error);
		if ($update_users_query) {
			$_SESSION['flash'] = ' <i class="far fa-check-circle"></i> Account Updated';
			header("Location: update_admin_form.php");
		} else {
			$_SESSION['flash-error'] = ' <i class="fas fa-exclamation-triangle"></i> Something went Wrong Try Again';
			header("Location: update_admin_form.php");
		}
	}
}




// mname
// lname
// username
// date_of_birth
// cont_num
// address
// password
