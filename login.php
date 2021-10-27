<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/login.css" />
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
    <div class="container login">
      <div class="card">
        <form action="">
          <div class="input-1">
            <label for="">Username</label>
            <input type="text" />
          </div>
          <div class="input-1">
            <label for="">Password</label>
            <input type="password" />
          </div>
          <div class="input-1">
            <input type="submit" value="Login" class="btn-login" />
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
