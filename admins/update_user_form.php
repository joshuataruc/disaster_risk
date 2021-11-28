<?php
session_start();
include_once '../db/connection.php';
$id = $_GET['user_id'];
$select_admin = "SELECT * FROM admins WHERE admin_id = '$id'";
$admin_query = mysqli_query($con, $select_admin) or die($con->error);
if (mysqli_num_rows($admin_query) > 0) {
    $row = $admin_query->fetch_assoc();
} else {
    header('Location:admins.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/utilities.css" />
    <link rel="stylesheet" type="../text/css" href="css/nav.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Register</title>
</head>
<style>
    nav {
        background-color: #f60f20;
        line-height: 30px;
        z-index: 1;
    }

    nav ul li a:hover {
        color: #000;
    }

    nav ul li a:hover:after {
        background: #000;
    }

    .text-danger {
        color: #f60f20;
    }

    .text-success {
        color: #007bff;
    }

    .text-muted {
        color: #6c757d;
    }
</style>

<body>

    <div class="container">
        <div class="register" id="register">
            <div class="register-form">
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
                <form action="process.php" method="post">
                    <div class="row">
                        <input type="hidden" name="id" class="form-control" value="<?php echo $row['admin_id']; ?>" />
                        <div class="input-3">
                            <label for="" class="label">First Name</label>
                            <input type="text" name="fname" class="form-control" value="<?php echo $row['fname']; ?>" />
                        </div>
                        <div class="input-3">
                            <label for="" class="label">Middle Name</label>
                            <input type="text" name="midname" class="form-control" value="<?php echo $row['mname']; ?>" />
                        </div>
                        <div class="input-3">
                            <label for="" class="label">Last Name</label>
                            <input type="text" name="lname" class="form-control" value="<?php echo $row['lname']; ?>" />
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="input-2">
                            <label for="" class="label">Username</label>
                            <input type="text" name="username" class="form-control" value="<?php echo $row['username']; ?>" />
                        </div>
                        <div class="input-2">
                            <label for="" class="label">Rescuer Type</label>
                            <select class="" name="rescue_type">
                                <option value="<?php echo $row['rescue_type']; ?>" hidden selected><?php echo $row['rescue_type']; ?></option>
                                <option value="Crime Emergency">Crime Emergency</option>
                                <option value="Fire Emergency">Fire Emergency</option>
                                <option value="Medical Emergency">Medical Emergency</option>
                                <option value="Barangay Emergency">Barangay Emergency</option>
                            </select>
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="input-2">
                            <label for="" class="label">Date of Birth</label>
                            <input type="date" name="dob" id="appoint_name" class="form-control" value="<?php echo $row['date_of_birth']; ?>" />
                        </div>
                        <div class="input-2">
                            <label for="" class="label">Contact Number</label>
                            <input type="text" name="cont_num" class="form-control phone" required onkeypress="validate(event)" onpaste="return false;" maxlength="11" value="<?php echo $row['cont_num']; ?>" />
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="input-1">
                            <label for="" class="label">Address</label>
                            <textarea name="address" id="" rows="2"><?php echo $row['address']; ?></textarea>
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="input-2">
                            <label for="" class="label">Password</label>
                            <input type="password" name="password" id="password" class="form-control" />
                            <small class="text-muted">IF YOU WONT CHANGE THE PASSWORD LEAVE IT BLANK</small>
                            <br>
                            <label id="pass-message"></label>
                        </div>
                        <div class="input-2">
                            <label for="" class="label">Confirm Password</label>
                            <input type="password" name="password" id="con-password" class="form-control" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-1">
                            <input type="submit" name="upd_users" value="Update" class="btn-reg" id="submit-btn" />
                        </div>
                    </div>
                    <!-- end row -->
                </form>
            </div>
        </div>
    </div>
</body>
<script src="../js/jquery.min.js"></script>

<script src="../js/number_only_input.js"></script>
<script type="text/javascript">
    var today = new Date().toISOString().split("T")[0];
    document.getElementsByName("dob")[0].setAttribute("max", today);

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

</html>