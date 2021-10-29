<?php

include_once 'session_check.php';

// echo $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Dashboard</title>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

    body {
      font-family: "Poppins", sans-serif;
      color: #111;
    }

    .nav-item:hover {
      color: #000;
    }

    .nav-link {
      font-weight: 700;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="index.php"><b>DPRRP</b></a>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item" id="notif">
          <a class="nav-link" href="notif.php">Notification </a>
        </li>
        <li class="nav-item" id="sos">
          <a class="nav-link" href="sendSOS.php">Send SOS</a>
        </li>

      </ul>
      <ul class="nav navbar-nav mr-1 navbar-right">
        <li class="nav-item" id="account"><a class="nav-link" href="#" class="mr-2 "> <?php echo ucfirst($_SESSION['username']); ?></a></li>
        <li class="nav-item"><a class="nav-link" href="logout.php" class="mr-1 "> <i class="fas fa-sign-out-alt"></i></a></li>
      </ul>
    </div>
  </nav>


  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.min.js"></script>
</body>

</html>