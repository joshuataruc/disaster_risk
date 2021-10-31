<?php while ($notif_row = $notif_query->fetch_assoc()) :  ?>
                <div class="col-md-12 mt-3">
                    <div class="card">
                        <div class="card-body p-5">
                            <div class="row">
                                <div class="col-md-8 col-sm-6">
                                    <h3> SOS Type: <b><?php echo $notif_row['sos_type'] ?></b></h3>
                                    <p> Address: <b><?php echo ucwords($notif_row['address']) ?></b></p>
                                    <p> Sender Name: <b><?php echo ucwords($notif_row['sender_fname'] . ' ' . $notif_row['sender_lname']) ?></b></p>
                                    <p> Sender Contact #: <b><?php echo $notif_row['sender_contact_num'] ?></b></p>
                                    <p> Date Sent: <b><?php echo $notif_row['created_at'] ?></b></p>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                        <div class="btn-container">
                                            <form action="rescue.php" method="post">
                                                <button class="rescue-button" name="rescue_btn" type="submit">Accept</button>
                                                <input type="hidden" name="sos_id" value="<?php echo $notif_row['notif_id'] ?>">
                                            </form>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile ?>




           