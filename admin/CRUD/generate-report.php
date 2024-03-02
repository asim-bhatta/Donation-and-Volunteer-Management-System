<?php
require 'dbcon.php'; // Include your database connection code

// Check if an ID is provided in the query parameter
if (isset($_GET['id'])) {
    $donation_id = $_GET['id'];

    // Fetch donation details from the database
    $query = "SELECT * FROM donations WHERE id = $donation_id";
    $result = mysqli_query($con, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $donation_data = mysqli_fetch_assoc($result);
    } else {
        echo "No donation record found for the provided ID.";
        exit();
    }
} else {
    echo "Please provide a donation ID.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h2 {
            text-align: center;
        }
        .report-content {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h2>Donation Report</h2>
    <div class="report-content">
        <p><strong>Donor Name:</strong> <?= $donation_data['name']; ?></p>
        <p><strong>Email:</strong> <?= $donation_data['email']; ?></p>
        <p><strong>Phone:</strong> <?= $donation_data['phone']; ?></p>
        <p><strong>Event:</strong> <?= $donation_data['event']; ?></p>
        <p><strong>Amount (Rs):</strong> <?= $donation_data['amount']; ?></p>
        <!-- Add more details here -->
    </div>
</body>
</html>
