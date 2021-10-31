<?php
include_once '../db/connection.php';
include_once 'dashboard-nav.php';


// $get_notif = "SELECT * FROM notification WHERE responded_by = '' && time_responded = '' ORDER BY notif_id DESC ";
// $notif_query = mysqli_query($con, $get_notif) or die($con->error);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Document</title>
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .rescue-button {
            border: none;
            padding: 45px 40px;
            border-radius: 50%;
            margin: 0;
            position: absolute;
            top: 50%;
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            text-transform: uppercase;
            font-weight: bold;
            color: white;
            background: #df2029;
            box-shadow: 0 8px 12px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .btn-container {
            display: flex;
            vertical-align: middle;
            justify-content: center;
            text-align: center;
            align-items: center;

        }

        /* .allowance{
            margin-top: 50px;
        } */
    </style>
</head>

<body class="body">

    <div class="container">

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

        <div class="row">
            <div class="col-md-12 mt-3">

                <div id="notif_data" class="notif_data">

                </div>

            </div>
        </div>
    </div>


</body>

<script src="../js/jquery.js"></script>
<script>
    $(setInterval(function() { 
        $('.notif_data').load('search_notif.php');
    }, 500));
</script>

</html>