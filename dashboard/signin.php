
<?php

session_start();


include ('connection.php');

if(isset($_POST['login'])){
  $e_address = $_POST['e_address'];
  $password= $_POST['password'];

  // query 

  $sql ="SELECT * FROM `signup` WHERE e_address ='$e_address' AND password ='$password' ";

   $result = mysqli_query($conn, $sql);

    $row = mysqli_num_rows($result);

    if($row > 0){ 
     $row1 = mysqli_fetch_assoc($result);
    $_SESSION['aid'] = $row1['id'];
    $_SESSION['f_name'] = $row1['f_name'];
    header('location:dashboard.php'); 
    }
    else{
      ?>
      <script>
         alert("User name & Email not match");
      </script>
      <?php

    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Sign In</title>

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

      <h2>Sign In</h2>
      <br>

      <!--  SIGN IN FORM -->
      <form action="" method="POST">

        <div class="input-group mb-3">
          <input type="email" name="e_address" class="form-control" placeholder="Email Address" required>
          <span class="input-group-text"><i class="bi bi-envelope"></i></span>
        </div>

        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" required>
          <span class="input-group-text"><i class="bi bi-lock"></i></span>
        </div>

        <button type="submit" name="login" class="btn-signup mt-3 w-100">
          SIGN IN
        </button>

      </form>

      <div class="text-center mt-4">
        <span class="text-muted">Don’t have an account? </span>
        <a href="./signup.php" class="signin-link">Sign Up</a>
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

</body>
</html>
