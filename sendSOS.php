<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/sos_buttons.css" />
    <title>Document</title>
  </head>
  <body>
    <?php include_once "dashboard_nav.php" ?>
    <div class="container-fluid">
      <div class="button-container">
        <div class="row">
          <div class="col-md-3 col-lg-3 col-sm-2">
            <form action="" method="POST">
              <input type="hidden" name="sos_name" value="BRGY" />
              <button type="submit" class="sos-button"><i class="fas fa-landmark"></i> <br> Barangay Hall </button>
            </form>
          </div>
          <div class="col-md-3 col-lg-3 col-sm-2">
            <form action="" method="POST">
              <input type="hidden" name="sos_name" value="BRGY" />
              <button type="submit" class="sos-button"><i class="fas fa-landmark"></i> <br> Police Station </button>
            </form>
          </div>
          <div class="col-md-3 col-lg-3 col-sm-2">
            <form action="" method="POST">
              <input type="hidden" name="sos_name" value="BRGY" />
              <button type="submit" class="sos-button"><img src="image/hospital.svg" alt=""> <br> Hospital </button>
            </form>
          </div>
          <div class="col-md-3 col-lg-3 col-sm-2">
            <form action="" method="POST">
              <input type="hidden" name="sos_name" value="BRGY" />
              <button type="submit" class="sos-button"><i class="fas fa-landmark"></i> <br> Fire Station </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
