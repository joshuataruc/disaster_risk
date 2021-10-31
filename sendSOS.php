 <?php include_once "dashboard_nav.php" ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/sos_buttons.css" />
   <title>Document</title>
   <style>
     .active {
       color: #000;
       font-weight: 700;
     }
   </style>
 </head>

 <body>

   <div class="container-fluid">
     <?php if (isset($_SESSION['flash-error'])) { ?>
       <div class="card mt-2">
         <div class="card-body">
           <h3 class="text-danger "><?php echo $_SESSION['flash-error']; ?></h3>
         </div>
       </div>
       <?php unset($_SESSION['flash-error']) ?>
     <?php } ?>
     <?php if (isset($_SESSION['flash-success'])) { ?>
       <div class="card mt-2">
         <div class="card-body">
           <h3 class="text-success "><?php echo $_SESSION['flash-success']; ?></h3>
         </div>
       </div>
       <?php unset($_SESSION['flash-success']) ?>
     <?php } ?>
     <div class="button-container">
       <div class="row">
         <div class="col-md-2 col-lg-3 col-sm-2">
           <form action="sendSOSProcess.php" method="POST">
             <input type="hidden" name="sos_name" value="BRGY" />
             <button type="submit" class="sos-button" name="brgyBtn">
               <img src="image/landmark-solid.svg" alt="" /> <br />
               Barangay Emergency
             </button>
           </form>
         </div>
         <div class="col-md-2 col-lg-3 col-sm-2">
           <form action="sendSOSProcess.php" method="POST">
             <input type="hidden" name="sos_name" value="BRGY" />
             <button type="submit" class="sos-button" name="policeBtn">
               <img src="image/police.svg" alt="" /> <br />
               Crime Emergency
             </button>
           </form>
         </div>
         <div class="col-md-2 col-lg-3 col-sm-2">
           <form action="sendSOSProcess.php" method="POST">
             <input type="hidden" name="sos_name" value="BRGY" />
             <button type="submit" class="sos-button" name="hospitalBtn">
               <img src="image/hospital.svg" alt="" /> <br />
               Medical Emergency
             </button>
           </form>
         </div>
         <div class="col-md-2 col-lg-3 col-sm-2">
           <form action="sendSOSProcess.php" method="POST">
             <input type="hidden" name="sos_name" value="BRGY" />
             <button type="submit" class="sos-button" name="fireBtn">
               <img src="image/fire-station.svg" alt="" /> <br />
               Fire Emergency
             </button>
           </form>
         </div>
       </div>
     </div>
   </div>
 </body>
 <script src="js/jquery.min.js">
   // function myFunction() {
   //  document.getElementById("sos").addClass("active");
   // }
   $('#sos').addClass('active');
 </script>

 </html>