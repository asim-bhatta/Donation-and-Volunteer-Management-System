<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Donation Usage Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h2 {
            text-align: center;
        }
        .report-form {
            max-width: 400px;
            margin: 0 auto;
        }
        .form-group {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <h2>View Donation Usage Report</h2>
    <div class="report-form">
        <form action="view-report.php" method="get">
            <div class="form-group">
                <label for="donation-id">Enter Donation ID:</label>
                <input type="text" id="donation-id" name="id" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">View Report</button>
        </form>
    </div>

    <?php
    require 'admin/CRUD/dbcon.php';
    if (isset($_GET['id'])) {
        $donation_id = $_GET['id'];
        // echo "ID: " . $donation_id;
        $report_url = "generate-report.php?id=$donation_id";
        echo "<a href=\"$report_url\" target=\"_blank\">View Donation Usage Report</a>";
    }
    ?>
</body>
</html>
