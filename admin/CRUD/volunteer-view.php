<?php
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

    <title>volunteer View</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>volunteer View Details 
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
                                
                                    <div class="mb-3">
                                        <label>volunteer Name</label>
                                        <p class="form-control">
                                            <?=$volunteer['name'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>volunteer Email</label>
                                        <p class="form-control">
                                            <?=$volunteer['email'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>volunteer Phone</label>
                                        <p class="form-control">
                                            <?=$volunteer['phone'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>volunteer Address</label>
                                        <p class="form-control">
                                            <?=$volunteer['address'];?>
                                        </p>
                                    </div>
                                   
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
<!-- CREATE TABLE CUSTOMERS(
   ID   INT              NOT NULL,
   NAME VARCHAR (20)     NOT NULL,
   AGE  INT              NOT NULL,
   ADDRESS  CHAR (25) ,
   SALARY   DECIMAL (18, 2),       
   PRIMARY KEY (ID)
); -->