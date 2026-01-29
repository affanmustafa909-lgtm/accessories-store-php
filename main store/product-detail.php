<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Product Detail</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap + Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="product-detail.css">
</head>

<body>



<?php


include '../dashboard/connection.php';
session_start();

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "SELECT * FROM add_product WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $product = mysqli_fetch_assoc($result);
           } else {
        echo "<div class='container mt-5'><div class='alert alert-danger'>❌ Product not found!</div></div>";
        exit;
    }
} else {
    echo "<div class='container mt-5'><div class='alert alert-warning'>⚠ No product selected.</div></div>";
    exit;
}


?>

<div class="detail-wrapper">
  <div class="detail-card">

    <!-- LEFT IMAGE -->
    <div class="detail-img">
      <img src="../dashboard/upload/<?php echo $product['p_image']; ?>" alt="Product">
    </div>

    <!-- RIGHT INFO -->
    <div class="detail-info">
      <h2><?php echo $product['p_name']; ?></h2>


      <p class="desc-title"><?php echo $product['p_des']; ?></p>
      <!-- Buy -->
     <div class="buy-box">
  <span class="price">$<?php echo $product['price']; ?></span>

  <div class="buy-row">
    <a href="addtocart.php?action=add&id=<?php echo $product['id']; ?>&qty=1" class="btn btn-primary px-4 text-white">Buy Now</a>

    <a href="addtocart.php?action=add&id=<?php echo $product['id']; ?>&qty=1" class="btn btn-warning px-4 text-white">Add to Cart</a>

  </div>
</div>



    </div>

  </div>
</div>

</body>
</html>
