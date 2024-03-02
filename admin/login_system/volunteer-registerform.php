<?php
session_start();
require '../CRUD/dbcon.php';

$errors = array();

if (isset($_POST['save_volunteer'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $address = mysqli_real_escape_string($con, $_POST['address']);

    // Validate Volunteer Name
    if (empty($name)) {
       $errors['name'] = "Name is required";
    }
    
    // Validate Volunteer Email
    if (empty($email)) {
        $errors['email'] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format";
    }
    
    // Validate Volunteer Phone
    if (empty($phone)) {
        $errors['phone'] = "Phone is required";
    } elseif (!preg_match('/^[0-9]{10}+$/', $phone)) {
        $errors['phone'] = "Invalid Phone Number";
    }
    
    // Validate Volunteer Address
    if (empty($address)) {
        $errors['address'] = "Address is required";
    }

    // If there are no validation errors, save the volunteer data
    if (empty($errors)) {
        $query = "INSERT INTO volunteers (name,email,phone,address) VALUES ('$name','$email','$phone','$address')";
        $query_run = mysqli_query($con, $query);
        
        if ($query_run) {
            $_SESSION['message'] = "Volunteer Created Successfully";
            header("Location: volunteer-registerform.php");
            exit(0);
        } else {
            $_SESSION['message'] = "Volunteer Not Created";
            header("Location: volunteer-registerform.php");
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
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <style>
    .error {
        color: red;
    }
</style>
</head>
<body>
  
    <div class="container mt-5">

    <?php
    include('../CRUD/message.php');

    ?>


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Volunteer Form For Event 
                            <!-- <a href="../../volunteer_page.php" class="btn btn-danger float-end">BACK</a> -->
                        </h4>
                    </div>
                    <div class="card-body">
                    <p>
                            <?php
                            if(isset($errors['name'])){
                                echo $errors['name'];
                            }
                            ?>
                        </p>
                        <p>
                            <?php
                            if(isset($errors['email'])){
                                echo $errors['email'];
                            }
                            ?>
                        </p>
                        <p>
                            <?php
                            if(isset($errors['phone'])){
                                echo $errors['phone'];
                            }
                            ?>
                        </p>
                        <p>
                            <?php
                            if(isset($errors['address'])){
                                echo $errors['address'];
                            }
                            ?>
                        </p>

                        <form action="" method="POST">

                        <div class="mb-3">
                    <label>Volunteer Name</label>
                    <input type="text" name="name" class="form-control <?php if (isset($errors['name'])) echo 'is-invalid'; ?>" required>
                    <?php if (isset($errors['name'])) { ?>
                        <div class="error"><?php echo $errors['name']; ?></div>
                    <?php } ?>
                </div>
                <div class="mb-3">
                    <label>Volunteer Email</label>
                    <input type="email" name="email" class="form-control <?php if (isset($errors['email'])) echo 'is-invalid'; ?>" required>
                    <?php if (isset($errors['email'])) { ?>
                        <div class="error"><?php echo $errors['email']; ?></div>
                    <?php } ?>
                </div>
                <div class="mb-3">
                    <label>Volunteer Phone</label>
                    <input type="text" name="phone" class="form-control <?php if (isset($errors['phone'])) echo 'is-invalid'; ?>" required>
                    <?php if (isset($errors['phone'])) { ?>
                        <div class="error"><?php echo $errors['phone']; ?></div>
                    <?php } ?>
                </div>
                <div class="mb-3">
                    <label>Volunteer Address</label>
                    <input type="text" name="address" class="form-control <?php if (isset($errors['address'])) echo 'is-invalid'; ?>" required>
                    <?php if (isset($errors['address'])) { ?>
                        <div class="error"><?php echo $errors['address']; ?></div>
                    <?php } ?>
                </div>
                <div class="mb-3">
                    <button type="submit" name="save_volunteer" class="btn btn-primary">Submit</button>
                    
                    <a href="../../volunteer_page.php" class="btn btn-danger">BACK</a>
        
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