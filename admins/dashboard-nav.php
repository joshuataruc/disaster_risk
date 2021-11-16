<?php

include_once '../session_check2.php';


// echo $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
      body {
      font-family: "Poppins", sans-serif !important;
      color: #111;
    }
    </style>
    <title>Document</title>
  </head>
  <body>
    <div
      class="
        d-flex
        flex-column flex-md-row
        align-items-center
        p-3
        px-md-4
        mb-3
        bg-white
        border-bottom
        shadow-sm
      "
    >
      <!-- <h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5> -->
      <a class="my-0 mr-md-auto font-weight-normal" href="../index.php"
        ><b>DPRRP</b></a
      >
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="notif.php">Notification</a>
        <a class="p-2 text-dark" href="sosReport.php">SOS Reports</a>
        <a class="p-2 text-dark" href="events.php">Events</a>
        <a class="p-2 text-dark" href="users.php">Users</a>
        <a class="p-2 text-dark" href="admins.php"
          ><?php echo ucfirst($_SESSION['username']); ?></a
        >
        <a class="p-2 text-dark" href="../logout.php"
          ><i class="fas fa-sign-out-alt"></i
        ></a>
      </nav>
    </div>
  </body>
</html>
