<?php
session_start();

// ini_set("display_errors", "1");
// ini_set("display_startup errors", "1");
// error_reporting(E_ALL);

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $errors = array();

    // Validate Volunteer Name
    if (empty($_POST["name"])) {
        $errors["name"] = "Volunteer Name is required";
    }

    // Validate Volunteer Email
    if (empty($_POST["email"])) {
        $errors["email"] = "Volunteer Email is required";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Invalid email format";
    }

    // Validate Volunteer Phone
    if (empty($_POST["phone"])) {
        $errors["phone"] = "Volunteer Phone is required";
    } elseif (!preg_match("/^[0-9]+$/", $_POST["phone"])) {
        $errors["phone"] = "Invalid phone number format";
    }

    // Validate Volunteer Address
    if (empty($_POST["address"])) {
        $errors["address"] = "Volunteer Address is required";
    }

    // If there are no validation errors, save the volunteer data
    if (empty($errors)) {
        $con = mysqli_connect("localhost","root","","donation_db");

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $address = mysqli_real_escape_string($con, $_POST['address']);

    $query = "INSERT INTO volunteers (name,email,phone,address) VALUES ('$name','$email','$phone','$address')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "volunteer Created Successfully!";
        header("Location: volunteer-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "volunteer Not Created";
        header("Location: volunteer-create.php");
        exit(0);
    }
      
    }
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

    <title>Volunteer Create</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Volunteer Add 
                            <a href="volunteer-index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">

                            <div class="mb-3">
                                <label>Volunteer Name</label>
                                <input type="text" name="name" class="form-control">
                                <?php if (isset($errors["name"])) { ?>
                                    <div class="text-danger"><?php echo $errors["name"]; ?></div>
                                <?php } ?>
                            </div>
                            <div class="mb-3">
                                <label>Volunteer Email</label>
                                <input type="email" name="email" class="form-control">
                                <?php if (isset($errors["email"])) { ?>
                                    <div class="text-danger"><?php echo $errors["email"]; ?></div>
                                <?php } ?>
                            </div>
                            <div class="mb-3">
                                <label>Volunteer Phone</label>
                                <input type="text" name="phone" class="form-control">
                                <?php if (isset($errors["phone"])) { ?>
                                    <div class="text-danger"><?php echo $errors["phone"]; ?></div>
                                <?php } ?>
                            </div>
                            <div class="mb-3">
                                <label>Volunteer Address</label>
                                <input type="text" name="address" class="form-control">
                                <?php if (isset($errors["address"])) { ?>
                                    <div class="text-danger"><?php echo $errors["address"]; ?></div>
                                <?php } ?>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="submit" class="btn btn-primary">Save Volunteer</button>
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
