<<?php
    session_start();
    require 'dbcon.php';
    
    
    // Check if an ID is provided in the query parameter
    if(isset($_GET['id'])) {
        $donation_id = $_GET['id'];
        
        // Fetch donation details from the database
        $query = "SELECT * FROM donations WHERE id = $donation_id";
        $donation_data = mysqli_query($con, $query)->fetch_assoc();
    } else {
        header("Location: donation-details.php"); // Redirect if ID is not provided
    }
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Donation Details</title>
</head>
<body>
  
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Donation Details</h4>
                    </div>
                    <div class="card-body">
                        <h5>Donor Name: <?= $donation_data['name']; ?></h5>
                        <p>Email: <?= $donation_data['email']; ?></p>
                        <p>Phone: <?= $donation_data['phone']; ?></p>
                        <p>Event: <?= $donation_data['event']; ?></p>
                        <p>Amount (Rs): <?= $donation_data['amount']; ?></p>
                        
                        <!-- Generate Donation Usage Report Button -->
                        <a href="generate-report.php?id=<?= $donation_id; ?>" class="btn btn-primary">Generate Donation Report</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
