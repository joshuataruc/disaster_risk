<?php
include_once 'dashboard_nav.php';
include_once 'db/connection.php';
$user_id = $_SESSION['user_id'];
$select_user = "SELECT * FROM users WHERE user_id = '$user_id'";
$user_query = mysqli_query($con, $select_user) or die($con->error);
$user_row = $user_query->fetch_assoc();

?>
<!DOCTYPE html>
<html>

<head>
	<title></title>

	<style type="text/css">
		.alert-container{
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.input-card {
			position: absolute;
			margin: 0;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
		}

		.card {
			width: 60vw;
		}

		/*#submit-btn:hover{
			cursor: not-allowed; 
		}*/
	</style>
</head>

<body>

	<div class="container-fluid">
		<div class="alert-container">
			<?php if (isset($_SESSION['flash-error'])) { ?>
			<div class="card mt-2">
				<div class="card-body">
					<h3 class="text-danger "><?php echo $_SESSION['flash-error']; ?></h3>
				</div>
			</div>
			<?php unset($_SESSION['flash-error']) ?>
		<?php } ?>
		<?php if (isset($_SESSION['flash'])) { ?>
			<div class="card mt-2">
				<div class="card-body">
					<h3 class="text-success "><?php echo $_SESSION['flash']; ?></h3>
				</div>
			</div>
			<?php unset($_SESSION['flash']) ?>
		<?php } ?>
		</div>
		<div class="card input-card">
			<div class="card-body">
				<form action="update_user_process.php" method="post">
					<div class="row">
						<input type="hidden" name="id" class="form-control" value="<?php echo $user_row['user_id'] ?>">
						<div class="form-group col-md-4">
							<label>First Name</label>
							<input type="text" name="fname" class="form-control" value="<?php echo $user_row['fname'] ?>">
						</div>
						<div class="form-group col-md-4">
							<label>Middle Name</label>
							<input type="text" name="midname" class="form-control" value="<?php echo $user_row['mname'] ?>">
						</div>
						<div class="form-group col-md-4">
							<label>Last Name</label>
							<input type="text" name="lname" class="form-control" value="<?php echo $user_row['lname'] ?>">
						</div>
						<div class="form-group col-md-12">
							<label>Username</label>
							<input type="text" name="username" class="form-control" value="<?php echo $user_row['username'] ?>">
						</div>
						<div class="form-group col-md-6">
							<label>Date of Birth</label>
							<input type="date" name="dob" id="appoint_name" class="form-control" value="<?php echo $user_row['date_of_birth'] ?>">
						</div>
						<div class="form-group col-md-6">
							<label>Contact Number</label>
							<input type="text" name="cont_num" class="form-control phone" onkeypress='validate(event)' onpaste="return false;" maxlength="11" value="<?php echo $user_row['cont_num'] ?>">
						</div>
						<div class="form-group col-md-12">
							<label>Address</label>
							<textarea rows="3" class="form-control" name="address"><?php echo $user_row['address'] ?></textarea>
						</div>
						<div class="form-group col-md-6">
							<label>Password</label>
							<input type="password" name="password" id="password" class="form-control">
							<small class="text-muted">IF YOU WONT CHANGE THE PASSWORD LEAVE IT BLANK</small><br>
							<label id="pass-message"></label>
						</div>
						<div class="form-group col-md-6">
							<label>Confirm Password</label>
							<input type="password" name="password" id="con-password" class="form-control"><br>
							<input type="submit" id="submit-btn" name="upd_users" value="Update User" class="float-right btn btn-primary">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>

	<script src="js/number_only_input.js"></script>
	<script type="text/javascript">
		var today = new Date().toISOString().split('T')[0];
		document.getElementsByName("dob")[0].setAttribute('max', today);

		$('#password, #con-password').on('keyup', function() {
			if ($('#con-password').val() == $('#password').val()) {
				$('#pass-message').html('Password Match').css('color', '#007bff ');
				$('#submit-btn').attr('disabled', false);
			} else {
				$('#pass-message').html('Password did not Match').css('color', '#dc3545  ');
				$('#submit-btn').attr('disabled', true);

			}
		});
	</script>
</body>

</html>