<?php session_start();

include_once 'db/connection.php';
$select_events = "SELECT * FROM events ORDER BY event_id DESC ";
$events_query = mysqli_query($con, $select_events);

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/utilities.css" />
    <link rel="stylesheet" href="css/events.css" />
    <link rel="stylesheet" type="text/css" href="css/nav.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Events</title>
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
        <div class="grid-events">
            <?php while($events_row = $events_query->fetch_assoc()): ?>
            <div class="card">
                <div class="card-body">
                    <h3><?php echo ucwords($events_row['event_title']) ?></h3>
                    <p><?php echo ucfirst($events_row['event_details']) ?></p>
                    <div class="grid grid-2-col">
                        <div class="text-left">
                            <p><?php echo $events_row['event_date'] . ' ' . $events_row['event_time'] ?></p>
                        </div>
                        <div class="text-right">
                           <?php echo ucwords($events_row['event_organizer']) ?>
                        </div>
                    </div>
                </div><!-- end card-body -->
            </div><!-- end card -->
            <?php endwhile ?>
        </div>
        <!-- end flex -->
    </div>
</body>

</html>