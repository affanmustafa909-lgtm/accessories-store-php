<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #cfd9df, #e2ebf0);
            font-family: 'Segoe UI', sans-serif;
        }

        .topbar {
            background: rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(8px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }


        .form-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            padding: 30px;
        }
    </style>
</head>

<body>

    <?php

    include 'connection.php';

    if (isset($_POST['submit'])) {
        $p_name = $_POST['p_name'];
        $p_des = $_POST['p_des'];
        $price  = $_POST['price'];
        $p_image = $_FILES['p_image'];
        $fileName = $p_image['name'];
        move_uploaded_file($image['tmp_name'], 'upload/' . $fileName);

        $addRecord = "INSERT INTO `add_product`(`p_name`, `p_des`, `price`, `p_image`) 
    VALUES ('$p_name','$p_des','$price','$fileName')";

        $query = mysqli_query($conn, $addRecord);

        header("Location: dashboard.php");
        exit();
    }
    ?>

    <nav class="navbar topbar px-4 mb-4">
        <span class="navbar-brand fw-bold">➕ Add Product</span>
        <div class="fw-semibold">
            Dashboard / <span class="text-primary">Add Product</span>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form-card">
                    <h4 class="mb-4">Product Information</h4>

                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Product Name</label>
                            <input type="text" name="p_name" class="form-control" placeholder="Enter product name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" name="p_des" rows="4" placeholder="Enter product description"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Price</label>
                            <input type="number" name="price" class="form-control" placeholder="Enter price">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Product Image</label>
                            <input type="file" name="p_image" class="form-control">
                        </div>
                        <div class="d-flex gap-3">
                            <button type="submit" name="submit" class="btn btn-primary px-4">Add Product</button>
                            <button type="reset" class="btn btn-outline-secondary px-4">Clear</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</body>

</html>