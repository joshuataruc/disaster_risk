<?php
include_once '../db/connection.php';
$events_id = htmlspecialchars($_GET['events_id']);
$select_events = "SELECT * FROM events WHERE event_id = $events_id ";
$events_query = mysqli_query($con, $select_events);

$events_row = $events_query->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/utilities.css" />
    <link rel="stylesheet" type="../text/css" href="css/nav.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Events</title>
</head>
<style>
    .text-danger {
        color: #f60f20;
    }

    .text-success {
        color: #007bff;
    }
</style>

<body>
    <div class="container">
        <div class="register" id="register">
            <div class="register-form">
                <form action="events_process.php" method="post">
                    <div class="row">
                        <div class="input-1">
                            <label for="">Title</label>
                            <input type="hidden" class="form-control" name="event_id" value="<?php echo $events_row['event_id'] ?>" />
                            <input type="text" class="form-control" name="event_title" value="<?php echo $events_row['event_title'] ?>" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-1">
                            <label for="">Event Details</label>
                            <textarea name="event_details" id="" rows="2"> <?php echo $events_row['event_details'] ?></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-2">
                            <label for="" class="label">Event Date</label>
                            <input type="date" name="event_date" class="form-control"  value="<?php echo $events_row['event_date'] ?>" />
                        </div>
                        <div class="input-2">
                            <label for="" class="label">Event time</label>
                            <input type="time" name="event_time" class="form-control phone"  value="<?php echo $events_row['event_time'] ?>" />
                            <small class="text-muted text-right">HR : MIN : AM/PM</small>
                        </div>
                    </div>
                    <p></p>
                    <div class="row">
                        <div class="input-1">
                            <label for="">Organizer</label>
                            <input type="text" class="form-control" name="event_organizer"  value="<?php echo $events_row['event_organizer'] ?>" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-1">
                            <input name="update" type="submit" value="Update Events" class="btn-reg" id="submit-btn" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="../js/jquery.min.js"></script>
<script type="text/javascript">
    var today = new Date().toISOString().split("T")[0];
    document.getElementsByName("event_date")[0].setAttribute("min", today);
</script>

</html>