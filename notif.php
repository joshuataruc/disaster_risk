<?php
include_once 'db/connection.php';


$get_notif = "SELECT * FROM notification WHERE responded_by = '' && time_responded = '' ORDER BY notif_id DESC ";
$notif_query = mysqli_query($con, $get_notif) or die($con->error);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>
</head>

<body>
    <?php include_once 'dashboard_nav.php' ?>

    <div class="container">
        <div class="row">
            <?php while ($notif_row = $notif_query->fetch_assoc()) :  ?>
                <div class="col-md-12 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <h3><?php echo $notif_row['sos_type'] ?></h3>
                            <p><?php echo ucfirst($notif_row['address']) ?></p>
                            <p><?php echo ucwords($notif_row['sender_fname'] . ' ' . $notif_row['sender_lname']) ?></p>
                            <p><?php echo $notif_row['sender_contact_num'] ?></p>
                            <p><?php echo $notif_row['created_at'] ?></p>
                            <?php if ($notif_row['sender_id']  == $_SESSION['user_id']) { ?>
                                <p>same id</p>
                            <?php } else { ?>
                                <Button class="btn btn-success btn-lg rounded">we got this</Button>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            <?php endwhile ?>
        </div>
    </div>

</body>


</html>