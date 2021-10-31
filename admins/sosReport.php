<?php

include_once '../db/connection.php';
include_once 'dashboard-nav.php';
$blank = '';
$select_user = "SELECT * FROM notification WHERE responded_by != '' && time_responded != '' ORDER BY updated_at asc ";
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
				<table id="user_tbl" class="table display table-hover">
					<thead>		 	
						<tr>
							<th>SOS Type</th>
							<th>Name </th>
							<th>Address</th>
							<th>Contact #</th>
							<th>Responder ID</th>
							<th>Report Date</th>
							<th>Respond Time</th>
						</tr>
					</thead>
					<tbody>
						<?php while ($user_row = $user_query->fetch_assoc()) : ?>
							<tr>
								<td><?php echo $user_row['sos_type']; ?></td>
								<td><?php echo $user_row['sender_fname'] . ' ' .  $user_row['sender_lname']; ?></td>
								<td><?php echo $user_row['address']; ?></td>
								<td><?php echo $user_row['sender_contact_num']; ?></td>
								<td><?php echo $user_row['responded_by']; ?></td>
								<td><?php echo $user_row['created_at']; ?></td>
								<td><?php echo $user_row['time_responded']; ?></td>
								
								
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