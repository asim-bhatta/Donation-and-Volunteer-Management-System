<?php
session_start();
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Donor Edit</title>
</head>
<body>
    
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Donation Edit 
                            <a href="donation-index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $donor_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM donations WHERE id='$donor_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $donor = mysqli_fetch_array($query_run);
                                ?>
                                <form action="donation-code.php" method="POST">
                                    <input type="hidden" name="donation_id" value="<?= $donor['id']; ?>">

                                    <div class="mb-3">
                                        <label>Donor Name</label>
                                        <input type="text" name="name" value="<?=$donor['name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Donor Email</label>
                                        <input type="email" name="email" value="<?=$donor['email'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Donor Phone</label>
                                        <input type="text" name="phone" value="<?=$donor['phone'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Donor Event</label>
                                        <input type="text" name="event" value="<?=$donor['event'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Donor Amount</label>
                                        <input type="text" name="amount" value="<?=$donor['amount'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_donation" class="btn btn-primary">
                                            Update Donation
                                        </button>
                                    </div>
                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>