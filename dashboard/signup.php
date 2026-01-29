<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Signup</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="./style.css">
</head>

<body>

  <div class="container">
    <div class="row signup-card g-0">

      <!-- LEFT  -->
      <div class="col-md-6 form-side">
        <div class="logo">Welcome To Nitec.</div>

        <h2>Sign Up</h2>
        <br>

        <form action="" method="POST" enctype="multipart/form-data">

          <div class="input-group">
            <input type="text" name="f_name" class="form-control" placeholder="Full Name" required>
            <span class="input-group-text"><i class="bi bi-person"></i></span>
          </div>
          <div class="input-group">
            <input type="email" name="e_address" class="form-control" placeholder="Email Address" required>
            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
          </div>
          <div class="input-group">
            <input type="password" name="password" class="form-control" placeholder="Create Password" required>
            <span class="input-group-text"><i class="bi bi-lock"></i></span>
          </div>
          <div class="input-group">
            <input type="password" name="cpassword" class="form-control" placeholder="Confirm Password" required>
            <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
          </div>

          <button type="submit" name="submit" class="btn-signup mt-3">
            SIGN UP
          </button>

        </form>

        <div class="text-center mt-4">
          <span class="text-muted">Already have an account? </span>
          <a href="./signin.php" class="signin-link">Sign In</a>
        </div>
      </div>

      <!-- RIGHT  -->
      <div class="col-md-6 image-side">
        <img src="../main store/images/pic main.webp">

        <div class="slide-icon slide-left">
          <i class="bi bi-arrow-left"></i>
        </div>
        <div class="slide-icon slide-right">
          <i class="bi bi-arrow-right"></i>
        </div>
      </div>

    </div>
  </div>





  <?php

  // connection include 

  use LDAP\Result;

  include 'connection.php';

  // condition 

  if (isset($_POST['submit'])) {
    $f_name = $_POST['f_name'];
    $e_address = $_POST['e_address'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];



    $insertquery =  "INSERT INTO `signup`(`f_name`, `e_address`, `password`, `cpassword`)
         VALUES ('$f_name','$e_address','$password','$cpassword')";

    $result = mysqli_query($conn, $insertquery);

    if ($result) {
      header('location:signin.php');
    } else {
  ?>
      <script>
        alert("Soory! User Registration Unsuccessful..");
      </script>

  <?php
    }
  }


  ?>

</body>

</html>