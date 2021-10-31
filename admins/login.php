<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/login.css" />
  <link rel="stylesheet" type="text/css" href="../css/nav.css" />
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
</style>

<body>
  <div class="container login">
    <div class="card">
      <?php if (isset($_SESSION['flash-error'])) { ?>
        <h3 class="text-danger"><?php echo $_SESSION['flash-error']; ?></h3>
        <?php unset($_SESSION['flash-error']) ?>
      <?php } ?>
      <?php if (isset($_SESSION['flash-success'])) { ?>
        <h3 class="text-success"><?php echo $_SESSION['flash-success']; ?></h3>
        <?php unset($_SESSION['flash-success']) ?>
      <?php } ?>
      <form action="auth.php" method="post">
        <div class="input-1">
          <label for="">Username</label>
          <input type="text" name="username" required />
        </div>
        <div class="input-1">
          <label for="">Password</label>
          <input type="password" name="password"  required/>
        </div>
        <div class="input-1">
          <input type="submit" value="Login" class="btn-login" />
        </div>
      </form>
      <div class="input-1">
          <a href="../index.php">Go back to Main Page</a>
        </div>
    </div>
  </div>
</body>

</html>