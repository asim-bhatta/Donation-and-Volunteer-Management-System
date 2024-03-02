<?php
session_start();
require '../CRUD/dbcon.php';
// ini_set("display_errors", "1");
// ini_set("display_startup errors", "1");
// error_reporting(E_ALL);



// if (strlen($_POST["password"]) < 8) {
//     die("Password must be at least 8 characters");
// }

// if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
//     die("Password must contain at least one letter");
// }

// if ( ! preg_match("/[0-9]/", $_POST["password"])) {
//     die("Password must contain at least one number");
// }

// if ($_POST["password"] !== $_POST["password_confirmation"]) {
//     die("Passwords must match");
// }

if(isset($_POST['save_volunteer']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $address = mysqli_real_escape_string($con, $_POST['address']);

    if (empty($name)) {
       $error="Name is required";
    }
    
    if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        die("Valid email is required");
    }
    
    if(! preg_match('/^[0-9]{10}+$/', $_POST["phone"])) {
        die("Valid Phone Number");
        }
    
    if (empty($_POST["address"])) {
        die("Address is required");
    }


    $query = "INSERT INTO volunteers (name,email,phone,address) VALUES ('$name','$email','$phone','$address')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Volunteer Created Successfully";
        header("Location: volunteer-registerform.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Volunteer Not Created";
        header("Location: volunteer-registerform.php");
        exit(0);
    }
}

?>