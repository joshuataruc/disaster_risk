
<?php
include_once '../db/connection.php';
$get_notif = "SELECT * FROM notification ORDER BY notif_id DESC";
$notif_query = mysqli_query($con, $get_notif) or die($con->error);

if(mysqli_num_rows($notif_query) > 0){
 while ($notif_row = $notif_query->fetch_assoc()) {
    echo ' <div class="card mt-2">
                <div class="card-body p-5">
                    <div class="row">
                        <div class="col-md-8 col-sm-6">'.
                         ' <h3> SOS Type: <b>'. $notif_row["sos_type"]. '</b></h3>
                            <p> Address: <b> '.ucwords($notif_row['address']).'</b></p>
                            <p> Sender Name: <b> '.ucwords($notif_row['sender_fname'] . ' ' . $notif_row['sender_lname']).' </b></p>
                            <p> Sender Contact #: <b> '.$notif_row['sender_contact_num'] .'</b></p>
                            <p> Date Sent: <b> '.$notif_row['created_at'] .'</b></p>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="btn-container">
                                <form action="rescue.php" method="post">
                                    <button class="rescue-button" name="rescue_btn" type="submit">Accept</button>
                                    <input type="hidden" name="sos_id" value=" '.$notif_row['notif_id'].' ">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>'.' 
            <audio autoplay>
                <source src="audio/siren.mp3" type="audio/mp3">
            </audio> '.
             '<script> $("body").css("background-color","#df2029")</script>';
;
 }
                
}
else{
    echo "NO SOS";
}

