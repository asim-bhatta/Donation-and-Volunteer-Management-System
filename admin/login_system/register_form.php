<?php
@include 'config.php';

$errors = array();

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['cpassword'];
    $user_type = $_POST['user_type'];

    // Basic form validation
    if (empty($name) || empty($email) || empty($password) || empty($confirm_password) || empty($user_type)) {
        $errors[] = 'All fields are required!';
    }

    // Password Match Validation
    if ($password != $confirm_password) {
        $errors[] = 'Password not matched!';
    }

    // Email Format Validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Invalid email format!';
    }

    // Existing User Validation
    $select = "SELECT * FROM donor_form WHERE email = '$email' LIMIT 1";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $errors[] = 'User already exists!';
    }

    // If no errors, hash password and insert into database using prepared statement
    if (empty($errors)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $insert = "INSERT INTO donor_form(name, email, password, user_type) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $insert);
        mysqli_stmt_bind_param($stmt, 'ssss', $name, $email, $hashed_password, $user_type);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        header('location:login_form.php');
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css?version=51">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="enter your name">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <select name="user_type">
         <option value="donor">donor</option>
         <option value="volunteer">volunteer</option>
         <!-- <option value="admin">admin</option> -->
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login_form.php">login now</a></p>
   </form>

</div>

</body>
</html>