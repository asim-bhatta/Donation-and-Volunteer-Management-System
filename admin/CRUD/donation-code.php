<?php
session_start();
require 'dbcon.php';
ini_set("display_errors", "1");
ini_set("display_startup errors", "1");
error_reporting(E_ALL);
if(isset($_POST['delete_donation']))
{
    $donor_id = mysqli_real_escape_string($con, $_POST['delete_donation']);

    $query = "DELETE FROM donations WHERE id='$donor_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "donation Deleted Successfully";
        header("Location: donation-index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "donation Not Deleted";
        header("Location: donation-index.php");
        exit(0);
    }
}

if(isset($_POST['update_donation']))
{
    $donation_id = mysqli_real_escape_string($con, $_POST['donation_id']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $event = mysqli_real_escape_string($con, $_POST['event']);
    $amount = mysqli_real_escape_string($con, $_POST['amount']);

    $query = "UPDATE donations SET name='$name', email='$email', phone='$phone', event='$event', amount='$amount' WHERE id='$donation_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "donation Updated Successfully";
        header("Location: donation-index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "donation Not Updated";
        header("Location: donation-index.php");
        exit(0);
    }
}



if(isset($_POST['save_donation']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $event = mysqli_real_escape_string($con, $_POST['event']);
    $amount = mysqli_real_escape_string($con, $_POST['amount']);

    $query = "INSERT INTO donations (name,email,phone,event,amount) VALUES ('$name','$email','$phone','$event','$amount')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "donation Created Successfully";
        header("Location: donation-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "donation Not Created";
        header("Location: donation-create.php");
        exit(0);
    }
}

?>