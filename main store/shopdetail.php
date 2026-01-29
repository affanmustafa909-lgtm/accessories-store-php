<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop Detail</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./shopdetail.css">
</head>

<body>
  <div class="app-container">
    <!-- header  -->

    <div class="top-bar d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center gap-3">
        <h5 class="logo">N nitec.</h5>
        <div class="search-box">
          <input type="text" placeholder="Search Products...">
          <i class="fa fa-search"></i>
        </div>
      </div>
      <div class="d-flex align-items-center gap-3">
        <i class="fa fa-lock icon-btn"></i>
        <i class="fa fa-heart icon-btn"></i>
        <div class="profile">
          <span>Ahmad</span>
          <img src="https://i.pravatar.cc/40" />
        </div>
      </div>
    </div>






    <!-- 2 row–  3 card -->
    <div class="container mt-4">
      <?php

      include '../dashboard/connection.php';

      $view = "SELECT * FROM add_product";

      $result = mysqli_query($conn, $view);


      ?>

      <!-- row 1 -->

      <div class="row g-4">

        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
          <div class="col-md-4">
            <a href="./product-detail.php?id=<?php echo $row['id']; ?>" target="_blank" class="card-link">
              <div class="product-card-olx">

                <div class="product-img-box">
                  <img src="../dashboard/upload/<?php echo $row['p_image']; ?>" alt="">
                </div>

                <div class="product-info">
                  <p class="product-title">
                    <?php echo $row['p_des']; ?>
                  </p>
                  <p class="product-price">Rs.<?php echo $row['price']; ?></p>
                  <p class="product-coins">Coins save Rs. 10</p>
                </div>

              </div>
            </a>
          </div>
        <?php } ?>




      </div>

    </div>

  </div>





</body>

</html>