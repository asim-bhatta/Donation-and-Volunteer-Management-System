<?php
session_start();
require 'dbcon.php';
// ini_set("display_errors", "1");
// ini_set("display_startup errors", "1");
// error_reporting(E_ALL);

if(isset($_POST['delete_volunteer']))
{
    $volunteer_id = mysqli_real_escape_string($con, $_POST['delete_volunteer']);

    $query = "DELETE FROM volunteers WHERE id='$volunteer_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "volunteer Deleted Successfully";
        header("Location: volunteer-index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "volunteer Not Deleted";
        header("Location: volunteer-index.php");
        exit(0);
    }
}

if(isset($_POST['update_volunteer']))
{
    $volunteer_id = mysqli_real_escape_string($con, $_POST['volunteer_id']);
    // echo $volunteer_id;
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $address = mysqli_real_escape_string($con, $_POST['address']);

    $query = "UPDATE volunteers SET name='$name', email='$email', phone='$phone', address='$address' WHERE id='$volunteer_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "volunteer Updated Successfully";
        header("Location: volunteer-index.php");
        // echo $phone;
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "volunteer Not Updated";
        header("Location: volunteer-index.php");
        exit(0);
    }
}


if(isset($_POST['save_volunteer']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $address = mysqli_real_escape_string($con, $_POST['address']);

    $query = "INSERT INTO volunteers (name,email,phone,address) VALUES ('$name','$email','$phone','$address')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "volunteer Created Successfully";
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

?>