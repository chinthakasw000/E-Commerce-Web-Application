<?php

include "connection.php";

$stockId = $_GET["s"];

if (isset($stockId)) {

    $q = "SELECT * 
    FROM `stock` 
    INNER JOIN `product` ON `stock`.`product_id` = `product`.`id`
    INNER JOIN `brand` ON `product`.`brand_id` = `brand`.`brand_id`
    INNER JOIN `color` ON `product`.`color_id` = `color`.`color_id`
    INNER JOIN `category` ON `product`.`category_id` = `category`.`cat_id`
    INNER JOIN `size` ON `product`.`size_id` = `size`.`size_id` 
    WHERE `stock`.stock_id = '".$stockId."'";

    $rs = Database::search($q);
    $d = $rs->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbif9a3H61+n5Kz8RZq02N97wG8Rw7u8eGeSY/RB58w2YXy71QOW9IqAqcaw/CgOBM4L8/7U+eg//+Y8oU+zxbMBH/k+zJw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-dark text-light">
    <?php include "navBar.php"; ?>

    <main class="container">
        <section class="product-details row mt-5">
            <div class="col-md-6">
                <div class="product-image">
                    <img src="<?php echo $d["path"]; ?>" alt="Product Image" width="500px" class="img-fluid rounded-3 single_product_view">
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-info">
                    <h1 class="text-info mb-3"><?php echo $d["name"]; ?></h1>
                    <h5 class="mt-3"><?php echo $d["brand_name"]; ?></h5>
                    <h6 class="mt-3"><?php echo $d["cat_name"]; ?></h6>
                    <h6 class="mt-3"><?php echo $d["color_name"]; ?></h6>
                    <h6 class="mt-3"><?php echo $d["size_name"]; ?></h6>
                    <p class="description mt-3"><?php echo $d["description"]; ?></p>
                    <h3 class="text-warning">Rs.<?php echo $d["price"]; ?>//=</h3>
                    <div class="row mt-3">
                        <div class="col-3">
                            <input type="text" placeholder="Qty" class="form-control">
                        </div>
                        <div class="col-9 mt-2">
                            <h6 class="text-warning"><?php echo $d["qty"]; ?></h6>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mt-3">
                        <button class="btn btn-outline-primary col-5 me-2">Add To Cart</button>
                        <button class="btn btn-outline-primary col-5">Buy Now</button>
                    </div>
                </div>
            </div>
        </section>

       

    <footer class="container mt-3">
        <p class="text-center">&copy; 2024 OnlineStore.lk || All Right Reserved</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>

</html>

<?php
} else {
    header("location:index.php");
}
?>
