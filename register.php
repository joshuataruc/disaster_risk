<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/utilities.css" />
    <link rel="stylesheet" type="text/css" href="css/nav.css" />
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
  </style>
  <body>
    <?php include_once 'nav.php'; ?>
    <div class="container">
      <div class="register" id="register">
        <div class="register-form">
          <?php if (isset($_SESSION['flash'])) { ?>
          <h3 class="text-danger"><?php echo $_SESSION['flash']; ?></h3>
          <?php unset($_SESSION['flash']) ?>
          <?php } ?>
          <?php if (isset($_SESSION['flash_success'])) { ?>
          <h3 class="text-success">
            <?php echo $_SESSION['flash_success']; ?>
          </h3>
          <?php unset($_SESSION['flash_success']) ?>
          <?php } ?>
          <form action="users/register_user.php" method="post">
            <div class="row">
              <div class="input-3">
                <label for="" class="label">First Name</label>
                <input type="text" name="fname" class="form-control" required />
              </div>
              <div class="input-3">
                <label for="" class="label">Middle Name</label>
                <input type="text" name="midname" class="form-control" />
              </div>
              <div class="input-3">
                <label for="" class="label">Last Name</label>
                <input type="text" name="lname" class="form-control" required />
              </div>
            </div>
            <!-- end row -->
            <div class="row">
              <div class="input-1">
                <label for="" class="label">Username</label>
                <input
                  type="text"
                  name="username"
                  class="form-control"
                  required
                />
              </div>
            </div>
            <!-- end row -->
            <div class="row">
              <div class="input-2">
                <label for="" class="label">Date of Birth</label>
                <input
                  type="date"
                  name="dob"
                  id="appoint_name"
                  class="form-control"
                  required=""
                />
              </div>
              <div class="input-2">
                <label for="" class="label">Contact Number</label>
                <input
                  type="text"
                  name="cont_num"
                  class="form-control phone"
                  required
                  onkeypress="validate(event)"
                  onpaste="return false;"
                  maxlength="11"
                  required
                />
              </div>
            </div>
            <!-- end row -->
            <div class="row">
              <div class="input-1">
                <label for="" class="label">Address</label>
                <textarea name="address" id="" rows="2"></textarea>
              </div>
            </div>
            <!-- end row -->
            <div class="row">
              <div class="input-2">
                <label for="" class="label">Password</label>
                <input
                  type="password"
                  name="password"
                  id="password"
                  class="form-control"
                  required
                /><br />
                <label id="pass-message"></label>
              </div>
              <div class="input-2">
                <label for="" class="label">Confirm Password</label>
                <input
                  type="password"
                  name="password"
                  id="con-password"
                  class="form-control"
                  required
                />
              </div>
            </div>
            <div class="row">
              <div class="input-1">
                <input
                  name="login"
                  type="submit"
                  value="Register"
                  class="btn-reg"
                  id="submit-btn"
                  disabled
                />
              </div>
            </div>
            <!-- end row -->
          </form>
        </div>
      </div>
    </div>
  </body>
  <script src="js/jquery.min.js"></script>
  <script src="js/confirm_password.js"></script>
  <script src="js/number_only_input.js"></script>
  <script type="text/javascript">
    var today = new Date().toISOString().split("T")[0];
    document.getElementsByName("dob")[0].setAttribute("max", today);
  </script>
</html>
