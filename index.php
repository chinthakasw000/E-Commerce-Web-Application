<?php

include "connection.php";

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body class="container-fluid bg-dark text-light" onload="loadProduct(0);">

    <!-- WhatsApp icon -->
    <a href="https://wa.me/94710476945" target="_blank" rel="noopener noreferrer">
        <img src="Resources/photo/whatapp/w.svg" class="whatsapp" alt="Chat with us on WhatsApp">
    </a>

    <!-- nav bar  -->
    <?php include "navBar.php"; ?>
    <!-- nav bar  -->

    <!-- carousel  -->
    <?php include "carousel.php"; ?>
    <!-- carousel  -->


    <!-- basic search  -->
    <div class="container d-flex justify-content-end mt-5">
        <div class="col-3 mt-3">
            <input type="text" class="form-control" placeholder="Search" onkeyup="searchProduct(0);" id="product">
        </div>
        <button class="btn btn-outline-info col-2 mt-3 ms-2" onclick="viewFilter();">Filter</button>
    </div>
    <!-- basic search  -->

 <!-- Advance Search  -->
<div class="d-none" id="filterId">
    <div class="border border-light rounded-4 mt-4 p-5 col-10 offset-1">
        <div class="row">

            <div class="col-12 col-md-6 mb-3">
                <label for="color-select" class="form-label">Color</label>
                <select name="color" class="bg-dark form-select" id="color">
                    <option value="0">Select Color</option>
                    <?php
                    $rs = Database::search("SELECT * FROM `color`");
                    $num = $rs->num_rows;
                    for ($i = 0; $i < $num; $i++) {
                        $d = $rs->fetch_assoc();
                    ?>
                        <option value="<?php echo $d['color_id']; ?>"><?php echo $d['color_name']; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>

            <div class="col-12 col-md-6 mb-3">
                <label for="color-select" class="form-label">Category</label>
                <select name="color" class="bg-dark form-select" id="cat">
                    <option value="0">Select Category</option>
                    <?php
                    $rs2 = Database::search("SELECT * FROM `category`");
                    $num2 = $rs2->num_rows;
                    for ($i = 0; $i < $num2; $i++) {
                        $d2 = $rs2->fetch_assoc();
                    ?>
                        <option value="<?php echo $d2['cat_id']; ?>"><?php echo $d2['cat_name']; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>

        </div>

        <div class="row">
            <div class="col-12 col-md-6 mb-3">
                <label for="color-select" class="form-label">Brand</label>
                <select name="color" class="bg-dark form-select" id="brand">
                    <option value="0">Select Brand</option>
                    <?php
                    $rs3 = Database::search("SELECT * FROM `brand`");
                    $num3 = $rs3->num_rows;
                    for ($i = 0; $i < $num3; $i++) {
                        $d3 = $rs3->fetch_assoc();
                    ?>
                        <option value="<?php echo $d3['brand_id']; ?>"><?php echo $d3['brand_name']; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>

            <div class="col-12 col-md-6 mb-3">
                <label for="color-select" class="form-label">Type</label>
                <select name="color" class="bg-dark form-select" id="size">
                    <option value="0">Select Type</option>
                    <?php
                    $rs4 = Database::search("SELECT * FROM `size`");
                    $num4 = $rs4->num_rows;
                    for ($i = 0; $i < $num4; $i++) {
                        $d4 = $rs4->fetch_assoc();
                    ?>
                        <option value="<?php echo $d4['size_id']; ?>"><?php echo $d4['size_name']; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12 col-md-5 mb-3">
                <input type="text" class="form-control" placeholder="Min Price" id="min" />
            </div>

            <div class="col-12 col-md-5 mb-3">
                <input type="text" class="form-control" placeholder="Max Price" id="max" />
            </div>

            <div class="col-12 col-md-2">
                <button class="btn btn-outline-info w-100" onclick="advSearchProduct(0);">Search</button>
            </div>
        </div>

    </div>
</div>




    <!-- brand search buttons  -->

    <div class="container mt-3">
        <div class="row mb-2">

            <div class="col mt-3">
                <div class="btn btn-outline-warning w-100 d-flex align-items-center justify-content-center" style="height: 60px;" onclick="location.reload();">
                    <img src="Resources/photo/index/icon/all.png" alt="ACER" class="me-2">
                </div>
            </div>



            <div class="col mt-3">
                <div class="btn btn-outline-warning w-100 d-flex align-items-center justify-content-center" style="height: 60px;" id="acer" onclick="searchProductAcer(0);">
                    <img src="Resources/photo/carousel/icon/acer.png" alt="ACER" class="me-2">
                </div>
            </div> 
            <div class="col mt-3">
                <div class="btn btn-outline-warning w-100 d-flex align-items-center justify-content-center" style="height: 60px;" id="asus" onclick="searchProductAsus(0);">
                    <img src="Resources/photo/carousel/icon/asus.png" alt="ASUS" class="me-2">
                </div>
            </div>
            <div class="col mt-3">
                <div class="btn btn-outline-warning w-100 d-flex align-items-center justify-content-center" style="height: 60px;" id="gigabyte" onclick="searchProductGigabyte(0);">
                    <img src="Resources/photo/carousel/icon/gigabyte.png" alt="GIGABYTE" class="me-2">
                </div>
            </div>
            <div class="col mt-3">
                <div class="btn btn-outline-warning w-100 d-flex align-items-center justify-content-center" style="height: 60px;" id="hp" onclick="searchProductHp(0);">
                    <img src="Resources/photo/carousel/icon/hp.png" alt="HP" class="me-2">
                </div>
            </div>
            <div class="col mt-3">
                <div class="btn btn-outline-warning w-100 d-flex align-items-center justify-content-center " style="height: 60px;" id="lenovo" onclick="searchProductLenovo(0);">
                    <img src="Resources/photo/carousel/icon/lenovo.png" alt="LENOVO" class="me-2">
                </div>
            </div>
            <div class="col mt-3">
                <div class="btn btn-outline-warning w-100 d-flex align-items-center justify-content-center" style="height: 60px;" id="msi" onclick="searchProductMsi(0);">
                    <img src="Resources/photo/carousel/icon/msi.png" alt="MSI" class="me-2">
                </div>
            </div>
            <div class="col mt-3">
                <div class="btn btn-outline-warning w-100 d-flex align-items-center justify-content-center" style="height: 60px;" id="razer" onclick="searchProductRazer(0);">
                    <img src="Resources/photo/carousel/icon/razer.png" alt="RAZER" class="me-2">
                </div>
            </div>
            <div class="col mt-3">
                <div class="btn btn-outline-warning w-100 d-flex align-items-center justify-content-center" style="height: 60px;" id="apple" onclick="searchProductApple(0);">
                    <img src="Resources/photo/carousel/icon/apple.png" alt="APPLE" class="me-2">
                </div>
            </div>
            <div class="col mt-3">
                <div class="btn btn-outline-warning w-100 d-flex align-items-center justify-content-center" style="height: 60px;" id="dell" onclick="searchProductDell(0);">
                    <img src="Resources/photo/carousel/icon/dell.png" alt="DELL" class="me-2">
                </div>
            </div>
        </div>
    </div>


    <!-- brand search buttons  -->



    <!-- load product  -->

    <div class="row col-10 offset-1" id="pid">

    </div>

    <!-- load product  -->

    <?php include "footer.php"; ?>


    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2024 Copyright:
        <a class="text-reset fw-bold" href="">srilaptop.lk</a>
    </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>