<?php
    session_start();
    require 'CRUD/dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
   <input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-header">
            <h3><span>Admin</span></h3>
        </div>
        
        <div class="side-content">
            <div class="profile">
                <div class="profile-img bg-img" style="background-image: url(img/pp.jpg)"></div>
                <h4>Asim Bhatta</h4>
                <small>Admin</small>
            </div>

            <div class="side-menu">
                <ul>
                    <li>
                       <a href="" class="active">
                            <span class="las la-home"></span>
                            <small>Dashboard</small>
                        </a>
                    </li>
                    <!-- <li>
                       <a href="">
                            <span class="las la-user-alt"></span>
                            <small>Profile</small>
                        </a>
                    </li> -->
                    <li>
                       <a href="CRUD/donation-index.php">
                            <span class="las la-clipboard-list"></span>
                            <small>Donations</small>
                        </a>
                    </li>
                    <!-- <li>
                       <a href="CRUD/events/index.php">
                            <span class="las la-clipboard-list"></span>
                            <small>Events</small>
                        </a>
                    </li> -->
                    <li>
                       <a href="CRUD/volunteer-index.php">
                            <span class="las la-user-alt"></span>
                            <small>Volunteers</small>
                        </a>
                    </li>
                    <!-- <li>
                       <a href="">
                            <span class="las la-tasks"></span>
                            <small>Contacts</small>
                        </a>
                    </li> -->

                </ul>
            </div>
        </div>
    </div>
    
    <div class="main-content">
        
        <header>
            <div class="header-content">
                <label for="menu-toggle">
                    <span class="las la-bars"></span>
                </label>
                
                <div class="header-menu">
                    <label for="">
                        <!-- <span class="las la-search"></span> -->
                    </label>
                    
                    <div class="notify-icon">
                        <!-- <span class="las la-envelope"></span>
                        <span class="notify">4</span> -->
                    </div>
                    
                    <div class="notify-icon">
                        <!-- <span class="las la-bell"></span>
                        <span class="notify">3</span> -->
                    </div>
                    
                    <div class="user">
                        <div class="bg-img" style="background-image: url(img/pp.jpg)"></div>
                        
                        <span class="las la-power-of"><a class="nav-link" href="admin-logout.php">Logout</a></span>
                        
                        <!-- <span>Welcome Admin</span> -->
                    </div>
                </div>
            </div>
        </header>
        
        
        <main>
            
            <div class="page-header">
                <h1>Dashboard</h1>
                <small>Home / Dashboard</small>
            </div>
            
            <!-- <div class="page-content">
            
                <div class="analytics">

                    <div class="card">
                        <div class="card-head">
                            <h2>100</h2>
                            <span class="las la-user-friends"></span>
                        </div>
                        <div class="card-progress">
                            <small>User activity this month</small>
                            <div class="card-indicator">
                                <div class="indicator one" style="width: 60%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                            <h2>3430</h2>
                            <span class="las la-eye"></span>
                        </div>
                        <div class="card-progress">
                            <small>Page views</small>
                            <div class="card-indicator">
                                <div class="indicator two" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                            <h2>Rs 621200</h2>
                            <span class="las line-awesome"></span>
                        </div>
                        <div class="card-progress">
                            <small>Monthly Donation growth</small>
                            <div class="card-indicator">
                                <div class="indicator three" style="width: 65%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                            <h2>470</h2>
                            <span class="las la-envelope"></span>
                        </div>
                        <div class="card-progress">
                            <small>New messages received</small>
                            <div class="card-indicator">
                                <div class="indicator four" style="width: 90%"></div>
                            </div>
                        </div>
                    </div>

                </div> -->


    <div class="container mt-4">

        <?php include('CRUD/message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Donor Details
                            <a href="CRUD/donation-create.php" class="btn btn-primary float-end">Add Donors</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Donor Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Event</th>
                                    <th>Amount(Rs)</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM donations";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $donor)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $donor['id']; ?></td>
                                                <td><?= $donor['name']; ?></td>
                                                <td><?= $donor['email']; ?></td>
                                                <td><?= $donor['phone']; ?></td>
                                                <td><?= $donor['event']; ?></td>
                                                <td><?= $donor['amount']; ?></td>
                                                <td>
                                                    <a href="CRUD/donation-view.php?id=<?= $donor['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="CRUD/donation-edit.php?id=<?= $donor['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="CRUD/donation-code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_donation" value="<?= $donor['id']; ?>" class="btn btn-danger btn-sm">Delete</button>
                                                        
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            
            </div>
            
        </main>
        
    </div>
</body>
</html>