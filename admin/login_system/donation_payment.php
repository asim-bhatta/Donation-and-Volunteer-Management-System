<?php
session_start();
require '../CRUD/dbcon.php';

$errors = array();

if (isset($_POST['save_donation'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $event = mysqli_real_escape_string($con, $_POST['event']);
    $amount = mysqli_real_escape_string($con, $_POST['amount']);

    // Validate donation Name
    if (empty($name)) {
       $errors['name'] = "Name is required";
    }
    
    // Validate donation Email
    if (empty($email)) {
        $errors['email'] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format";
    }
    
    // Validate donation Phone
    if (empty($phone)) {
        $errors['phone'] = "Phone is required";
    } elseif (!preg_match('/^[0-9]{10}+$/', $phone)) {
        $errors['phone'] = "Invalid Phone Number";
    }
    
    if (empty($event)) {
        $errors['event'] = "Event is required";
    }

    // Validate donation event
    if (empty($amount)) {
        $errors['amount'] = "Amount is required";
    }

    // If there are no validation errors, save the donation data
    if (empty($errors)) {
        $query = "INSERT INTO donations (name,email,phone,event,amount) VALUES ('$name','$email','$phone','$event','$amount')";
        $query_run = mysqli_query($con, $query);

        if ($query_run) {
            $_SESSION['message'] = "Donated Successfully";
            
            // Pass the form data as URL parameters
            header("Location: payment.php?name=" . urlencode($name) . "&email=" . urlencode($email) . "&phone=" . urlencode($phone) . "&event=" . urlencode($event) . "&amount=" . urlencode($amount));
            exit(); // Important to stop further script execution
        } else {
            $_SESSION['message'] = "Donation Not Successful";
        }
        
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Donation Create</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <!-- <?php include('../CRUD/message.php'); ?> -->

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Donation Form For Event</h4>
                </div>
                <div class="card-body">
                    <!-- Display error messages here -->
                    <?php if (isset($errors['name'])) { echo '<p class="error">' . $errors['name'] . '</p>'; } ?>
                    <?php if (isset($errors['email'])) { echo '<p class="error">' . $errors['email'] . '</p>'; } ?>
                    <?php if (isset($errors['phone'])) { echo '<p class="error">' . $errors['phone'] . '</p>'; } ?>
                    <?php if (isset($errors['event'])) { echo '<p class="error">' . $errors['event'] . '</p>'; } ?>
                    <?php if (isset($errors['amount'])) { echo '<p class="error">' . $errors['amount'] . '</p>'; } ?>

                    <form action="" method="POST">
                        <!-- ... (your form fields) -->
                        <!-- ... (other form fields) -->
<div class="mb-3">
    <label>Donation Name</label>
    <input type="text" name="name" class="form-control <?php if (isset($errors['name'])) echo 'is-invalid'; ?>" required>
    <?php if (isset($errors['name'])) { ?>
        <div class="error"><?php echo $errors['name']; ?></div>
    <?php } ?>
</div>
<div class="mb-3">
    <label>Donation Email</label>
    <input type="email" name="email" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>" class="form-control <?php if (isset($errors['email'])) echo 'is-invalid'; ?>" required>
    <?php if (isset($errors['email'])) { ?>
        <div class="error"><?php echo $errors['email']; ?></div>
    <?php } ?>
</div>
<div class="mb-3">
    <label>Donation Phone</label>
    <input type="text" name="phone" value="<?php if (isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>" class="form-control <?php if (isset($errors['phone'])) echo 'is-invalid'; ?>" required>
    <?php if (isset($errors['phone'])) { ?>
        <div class="error"><?php echo $errors['phone']; ?></div>
    <?php } ?>
</div>
<div class="mb-3">
    <label>Donation Event</label>
    <input type="text" name="event" value="<?php if (isset($_POST['event'])) echo htmlspecialchars($_POST['event']); ?>" class="form-control <?php if (isset($errors['event'])) echo 'is-invalid'; ?>" required>
    <?php if (isset($errors['event'])) { ?>
        <div class="error"><?php echo $errors['event']; ?></div>
    <?php } ?>
</div>
<div class="mb-3">
    <label>Donation Amount</label>
    <input type="text" name="amount" value="<?php if (isset($_POST['amount'])) echo htmlspecialchars($_POST['amount']); ?>" class="form-control <?php if (isset($errors['amount'])) echo 'is-invalid'; ?>" required>
    <?php if (isset($errors['amount'])) { ?>
        <div class="error"><?php echo $errors['amount']; ?></div>
    <?php } ?>
</div>
<!-- ... (other form fields) -->

                        <div class="mb-3">
                            <!-- Use a regular submit button to submit the form -->
                            <!-- <button type="submit"><a href="payment.php">Submit</button> -->
                            <button type="submit" name="save_donation" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
