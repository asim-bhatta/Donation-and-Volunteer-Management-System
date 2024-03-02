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

    <title>volunteer Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>volunteer Edit 
                            <a href="volunteer-index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $volunteer_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM volunteers WHERE id='$volunteer_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $volunteer = mysqli_fetch_array($query_run);
                                ?>
                                <form action="volunteer-code.php" method="POST">
                                    <input type="hidden" name="volunteer_id" value="<?= $volunteer['id']; ?>">

                                    <div class="mb-3">
                                        <label>Volunteer Name</label>
                                        <input type="text" name="name" value="<?=$volunteer['name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Volunteer Email</label>
                                        <input type="email" name="email" value="<?=$volunteer['email'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Volunteer Phone</label>
                                        <input type="text" name="phone" value="<?= $volunteer['phone']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Volunteer Address</label>
                                        <input type="text" name="address" value="<?=$volunteer['address'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_volunteer" class="btn btn-primary">
                                            Update Volunteers
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