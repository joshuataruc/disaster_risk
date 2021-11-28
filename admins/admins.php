<?php

include_once '../db/connection.php';
include_once 'dashboard-nav.php';
$select_user = "SELECT * FROM admins";
$user_query = mysqli_query($con, $select_user);


?>
<!DOCTYPE html>
<html>

<head>
	<title>Sta Monica</title>
	<link rel="icon" href="../image/Concepcion_Tarlac.svg">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../datatables/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="../datatables/Buttons-1.5.6/css/buttons.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		.close {
			margin-top: 10px;
			margin-right: 15px;
		}

		.add_btn {
			border-radius: 50px;
		}
		.card{
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}
	</style>
</head>

<body>

	<div class="container-fluid">
		<div class="card">
			<div class="card-body p-5">
				<?php if (isset($_SESSION['flash-error'])) { ?>
                    <h3 class="text-danger"><?php echo $_SESSION['flash-error']; ?></h3>
                    <?php unset($_SESSION['flash-error']) ?>
                <?php } ?>
                <?php if (isset($_SESSION['flash-success'])) { ?>
                    <h3 class="text-success">
                        <?php echo $_SESSION['flash-success']; ?>
                    </h3>
                    <?php unset($_SESSION['flash-success']) ?>
                <?php } ?>
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<a href="register_admin.php" class=" btn add_btn btn-outline-dark float-right" data-toggle="tooltip" data-placement="right" title="Add User"><i class="fas fa-plus"></i></a>
					</div>
				</div>
				<table id="user_tbl" class="table display table-hover">
					<thead>
						<tr>
							<th>Username</th>
							<th>Name </th>
							<th>Rescuer Type </th>
							<th>Address</th>
							<th>Contact #</th>
							<th>Date of Birth</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php while ($user_row = $user_query->fetch_assoc()) : ?>
							<tr>
								<td><?php echo $user_row['username']; ?></td>
								<td><?php echo $user_row['fname'] . ' ' .  $user_row['mname'] . ' ' .  $user_row['lname']; ?></td>
								<td><?php echo $user_row['rescue_type']; ?></td>
								<td><?php echo $user_row['address']; ?></td>
								<td><?php echo $user_row['cont_num']; ?></td>
								<td><?php $dob = strtotime($user_row['date_of_birth']);
									echo date('F d Y', $dob); ?></td>
								<td>
									<a href="update_user_form.php?user_id=<?php echo $user_row['admin_id']; ?>" class="btn btn-info house_btn" data-toggle="tooltip" title="Update User"><i class="fas fa-user-edit text-white"></i></a>
									<a href="process.php?delete_id=<?php echo $user_row['admin_id']; ?>" onclick="return confirm('Are you sure you want to delete this Admin?');" class="btn btn-danger" data-toggle="tooltip" title="Delete 
								User"> <i class="far fa-trash-alt"></i></a>
								</td>
							</tr>
						<?php endwhile; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<script src="https://kit.fontawesome.com/428feb9164.js"></script>
	<script src="../datatables/jquery-3.3.1.min.js"></script>
	<script src="../datatables/jquery.dataTables.min.js"></script>
	<script src="../datatables/dataTables.bootstrap4.min.js"></script>
	<script src="../datatables/dataTables.buttons.min.js"></script>
	<script src="../datatables/Buttons-1.5.6/js/buttons.bootstrap4.min.js"></script>
	<script src="../datatables/jszip.min.js"></script>
	<script src="../datatables/pdfmake.min.js"></script>
	<script src="../datatables/vfs_fonts.js"></script>
	<script src="../datatables/buttons.html5.min.js"></script>
	<script src="../datatables/buttons.print.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script>
		$('#user_tbl').DataTable({

			dom: 'lBfrtip',
			"lengthMenu": [
				[10, 25, 50, -1],
				[10, 25, 50, "All"]
			],
			buttons: [
				'excelHtml5',
				'csvHtml5',
				'pdfHtml5',
				'print'

			],
			language: {
				paginate: {
					next: '<i class="fas fa-chevron-right"></i></i>',
					previous: '<i class="fas fa-chevron-left"></i></i>'
				}
			}

		});
		$('[data-toggle="tooltip"]').tooltip();
	</script>
</body>

</html>