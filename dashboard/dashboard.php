<?php

session_start();
if (!isset($_SESSION['aid'])) {
    header('location:signin.php');
} else {
    $aid = $_SESSION['aid'];
    $f_name = $_SESSION['f_name'];
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Store Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">

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

        .sidebar {
            height: 100%;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .sidebar a {
            text-decoration: none;
            color: #333;
            padding: 12px 15px;
            display: block;
            border-radius: 10px;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .sidebar a:hover {
            background: #f1f5f9;
        }

        /* Main Cards */
        .dashboard-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            padding: 25px;
        }
    </style>
</head>

<body>

    <nav class="navbar topbar px-4 mb-4">
        <span class="navbar-brand fw-bold">🛒 Store Dashboard</span>

        <form class="d-flex w-50">
            <input class="form-control me-2" type="search" placeholder="Search products...">
            <button class="btn btn-outline-dark">Search</button>
        </form>

        <div class="fw-semibold">

            Welcome, <span class="text-primary"> <?php echo $f_name; ?></span>
        </div>
    </nav>

    <!-- Main Layout -->
    <div class="container">
        <div class="row g-4">

            <!-- Sidebar -->
            <div class="col-md-3">
                <div class="sidebar p-3">
                    <a href="./add_product.php" target="_blank">➕ Add Product</a>
                    <a href="./dashboard.php" target="_blank">📦 View Products</a>

                </div>
            </div>

            <?php
            include 'connection.php';
            $view = "SELECT * FROM `add_product`";

            $query = mysqli_query($conn, $view);

            while ($result = mysqli_fetch_array($query)) {

            ?>

                <div class="card-custom">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="mb-0">Recent Sales</h6>
                        <a href="#" class="text-primary small">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th><input type="checkbox"></th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php

                                $i = 1;
                                while ($result = mysqli_fetch_assoc($query)) {
                                ?>

                                    <tr>
                                        <td scope="row">
                                            <?php echo $i++; ?>
                                        </td>
                                        <td><img src="upload/<?php echo $result['p_image']; ?>" width="100px" alt=""></td>
                                        <td>
                                            <?php echo $result['p_name']; ?>
                                        </td>
                                        <td>
                                            <?php echo $result['p_des']; ?>
                                        </td>
                                        <td>
                                            <?php echo $result['price']; ?>
                                        </td>
                                        <td> <a href="update.php?id=<?php echo $result['id']; ?>"><i
                                                    class="far fa-edit ms-3"></i></a>
                                            <a href="delete.php?id=<?php echo $result['id']; ?>"><i
                                                    class="far fa-trash-alt ms-3 text-danger"></i></a>
                                        </td>


                                    </tr>
                                <?php
                                }
                                ?>


                            </tbody>
                        </table>
                    <?php
                }
                    ?>
                    </div>
                </div>

        </div>
    </div>

</body>

</html>