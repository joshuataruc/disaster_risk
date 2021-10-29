<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <?php include_once "dashboard_nav.php" ?>
    <div class="container-fluid">
      <div class="button-container">
        <div class="row">
          <div class="col-md-2 col-lg-3 col-sm-2">
            <form action="sendSOSProcess.php" method="POST">
              <input type="hidden" name="sos_name" value="BRGY" />
              <button type="submit" class="sos-button" name="brgyBtn">
                <img src="image/landmark-solid.svg" alt="" /> <br />
                Barangay Hall
              </button>
            </form>
          </div>
          <div class="col-md-2 col-lg-3 col-sm-2">
            <form action="sendSOSProcess.php" method="POST">
              <input type="hidden" name="sos_name" value="BRGY" />
              <button type="submit" class="sos-button" name="policeBtn">
                <img src="image/police.svg" alt="" /> <br />
                Police Station
              </button>
            </form>
          </div>
          <div class="col-md-2 col-lg-3 col-sm-2">
            <form action="sendSOSProcess.php" method="POST">
              <input type="hidden" name="sos_name" value="BRGY" />
              <button type="submit" class="sos-button" name="hospitalBtn">
                <img src="image/hospital.svg" alt="" /> <br />
                Hospital
              </button>
            </form>
          </div>
          <div class="col-md-2 col-lg-3 col-sm-2">
            <form action="sendSOSProcess.php" method="POST">
              <input type="hidden" name="sos_name" value="BRGY" />
              <button type="submit" class="sos-button" name="fireBtn">
                <img src="image/fire-station.svg" alt="" /> <br />
                Fire Station
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
