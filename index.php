<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="css/nav.css" />
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
      integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>DPRRP</title>
    <style>
      .modal {
        max-width: 900px !important;
      }
      /* .text-dark {
        color: #111 !important;
      } */
      .modal-inside-container {
        padding: 15px;
        margin: 10px 0 15px;
      }
      .modal-inside-container ul li {
        margin: 5px 0;
      }
      .modal-inside-container ul li, .modal-inside-container h3, .modal-inside-container h1{
       color: #111 !important;
      }
    </style>
  </head>
  <body>
    <?php include_once 'nav.php'; ?>
    <section class="main">
      <div class="main-text">
        <h1 class="main-title">Disaster Preparedness and Risk Reduction Portal</h1>
        <p>
          Disasters are severe disturbances to a community's ability to cope
          utilizing its own resources. Natural, man-made, and technical risks,
          as well as various elements that influence a community's exposure and
          vulnerability, can all lead to disaster.
        </p>
        <a href="#what-to-do" class="btn-action">What to do when</a>
      </div>
    </section>

    <section class="what-to-do">
      <h1 class="what-to-do-title" id="what-to-do">WHAT TO DO WHEN</h1>
      <div class="what-to-do-content">
        <div class="card">
          <img src="image/flood1.jpg" alt="" />
          <div class="card-body">
            <h3>Flood</h3>
            <p>
              Floods are the most frequent type of natural disaster and occur
              when an overflow of water submerges land that is usually dry.
              Floods are often caused by heavy rainfall, rapid snowmelt or a
              storm surge from a tropical cyclone or tsunami in coastal areas.
            </p>
          </div>
          <a href="#vid-modal-flood" rel="modal:open" class="card-btn"
            >Play Video
            <span class="btn-icon"><i class="fas fa-play-circle"></i> </span>
          </a>
        </div>
        <div class="card">
          <img src="image/wildfire.jpg" alt="" />
          <div class="card-body">
            <h3>Wildfire</h3>
            <p>
              A wildfire is an unplanned fire that burns in a natural area such
              as a forest, grassland, or prairie. Wildfires are often caused by
              human activity or a natural phenomenon such as lightning, and they
              can happen at any time or anywhere. In 50% of wildfires recorded,
              it is not known how they started.
            </p>
          </div>
          <a href="#vid-modal-wildfire" rel="modal:open" class="card-btn"
            >Play Video
            <span class="btn-icon"><i class="fas fa-play-circle"></i> </span>
          </a>
        </div>
        <div class="card">
          <img src="image/earthquake.jpg" alt="" />
          <div class="card-body">
            <h3>Earthquake</h3>
            <p>
              is what happens when two blocks of the earth suddenly slip past
              one another. The surface where they slip is called the fault. The
              location below the earth’s surface where the earthquake starts is
              called the hypocenter, and the location directly above it on the
              surface of the earth is called the epicenter.
            </p>
          </div>
          <a href="#vid-modal-earthquake" rel="modal:open" class="card-btn"
            >Play Video
            <span class="btn-icon"><i class="fas fa-play-circle"></i> </span>
          </a>
        </div>
        <div class="card">
          <img src="image/volcanic-eruption.jpg" alt="" />
          <div class="card-body">
            <h3>Volcanic Eruption</h3>
            <p>
              A volcanic eruption is when lava and gas are released from a
              volcano—sometimes explosively. ... The most dangerous type of
              eruption is called a 'glowing avalanche' which is when freshly
              erupted magma flows down the sides of a volcano.
            </p>
          </div>
          <a href="#vid-modal-volcano" rel="modal:open" class="card-btn"
            >Play Video
            <span class="btn-icon"><i class="fas fa-play-circle"></i> </span>
          </a>
        </div>
        <div class="card">
          <img src="image/landslide.jpg" alt="" />
          <div class="card-body">
            <h3>Landslide</h3>
            <p>
              as the movement of a mass of rock, debris, or earth down a slope.
              Landslides are a type of "mass wasting," which denotes any
              down-slope movement of soil and rock under the direct influence of
              gravity
            </p>
          </div>
          <a href="#vid-modal-landslide" rel="modal:open" class="card-btn"
            >Play Video
            <span class="btn-icon"><i class="fas fa-play-circle"></i> </span>
          </a>
        </div>
      </div>
      <?php include_once 'modals.php'; ?>  

      <!-- contacts -->
    </section>
    <div class="contacts" id="contacts">
      <h1>LIST OF HOSPITALS IN TARLAC</h1>
      <div class="table-container">
        <table class="contacts-table">
          <thead>
            <tr>
              <th>Hospital</th>
              <th>Contact Number</th>
              <th>Address</th>
              <th>Map</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Tarlac Provincial Hospital</td>
              <td>(045) 982-6885 <br />(045) 491-8970</td>
              <td>Hospital Drive San Vicente, Tarlac City, Tarlac</td>
              <td>
                <a
                  href="https://www.google.com/maps/place/Tarlac+Provincial+Hospital+(TPH)/@15.4750177,120.5865725,15z/data=!4m12!1m6!3m5!1s0x0:0xcaf4807a9e1a2384!2sTarlac+Provincial+Hospital+(TPH)!8m2!3d15.4750177!4d120.5865725!3m4!1s0x3396c7fc3a972c49:0xcaf4807a9e1a2384!8m2!3d15.4750177!4d120.5865725"
                  ><i class="fas fa-map-marked"></i
                ></a>
              </td>
            </tr>
            <tr>
              <td>Central Luzon Doctors' Hospital</td>
              <td>(045) 982-0806 <br />(045) 982-0661 <br />(045) 982-8678</td>
              <td>Hospital Drive San Vicente, Tarlac City, Tarlac</td>
              <td>
                <a
                  href="https://www.google.com/maps/place/Central+Luzon+Doctors'+Hospital/@15.4782732,120.5861805,15.17z/data=!4m5!3m4!1s0x3396c6464a90eb69:0x9c71e958e91bdd30!8m2!3d15.4781792!4d120.5869477"
                  ><i class="fas fa-map-marked"></i
                ></a>
              </td>
            </tr>
            <tr>
              <td>Jecsons Medical Center</td>
              <td>
                (045) 982-5501 <br />(045) 982-5504 <br />(045) 982-1457 <br />
                (045) 982-5507
              </td>
              <td>MacArthur High way, Tarlac City, Tarlac</td>
              <td>
                <a
                  href="https://www.google.com/maps/place/Jecsons+Medical+Center/@15.4802873,120.5816975,15z/data=!4m5!3m4!1s0x3396c618732e9559:0x3dd80301565b3a7!8m2!3d15.4909959!4d120.5974886"
                  ><i class="fas fa-map-marked"></i
                ></a>
              </td>
            </tr>
            <tr>
              <td>Ramos General Hospital</td>
              <td>
                (045) 982-0542 <br />(045) 982-2350 <br />(045) 982-7074 <br />
                (045) 982-4041 <br />
                (045) 982-8725
              </td>
              <td>Hilario St, Tarlac City, Tarlac</td>
              <td>
                <a
                  href="https://www.google.com/maps/place/Ramos+General+Hospital/@15.4778386,120.5855109,16z/data=!4m5!3m4!1s0x3396c63e9c2d4071:0x518aeb1a9159c146!8m2!3d15.484983!4d120.5931144"
                  ><i class="fas fa-map-marked"></i
                ></a>
              </td>
            </tr>
            <tr>
              <td>Talon General Hospital</td>
              <td>(045) 982-1400</td>
              <td>F. Tañedo St, Tarlac City, 2300 Tarlac</td>
              <td>
                <a
                  href="https://www.google.com/maps/place/Talon+General+Hospital/@15.4906328,120.5906914,18.17z/data=!4m5!3m4!1s0x3396c623549bb29f:0x8633a42602e8ecf9!8m2!3d15.4907929!4d120.5915393"
                  ><i class="fas fa-map-marked"></i
                ></a>
              </td>
            </tr>
            <tr>
              <td>Loving Mother</td>
              <td>(045) 982 5644</td>
              <td>F. Tañedo St, Tarlac City, 2300 Tarlac</td>
              <td>
                <a
                  href="https://www.google.com/maps/place/Loving+Mother+General+hospital+%26+Diagnostic+Center/@15.4927742,120.5931056,18.17z/data=!4m5!3m4!1s0x3396c62340414249:0x5245366b15dc8ec4!8m2!3d15.4928178!4d120.5933487"
                  ><i class="fas fa-map-marked"></i
                ></a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </body>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

  <!-- jQuery Modal -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>

  <footer class="footer">
    <div class="footer-content">
      <h2>Quick Links</h2>
      <div class="grid grid-5">
        <div class="footer-link"><a href="index.php">Home</a></div>
        <div class="footer-link">
          <a href="index.php#what-to-do">What to do</a>
        </div>
        <div class="footer-link"><a href="index.php#contacts">Contacts</a></div>
        <div class="footer-link"><a href="register.php">Register</a></div>
        <div class="footer-link"><a href="login.php">Login</a></div>
      </div>
    </div>
  </footer>
</html>
