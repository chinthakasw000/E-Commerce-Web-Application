<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body class="container bg-transparent admin_dashboard_background ">

    <h2 class="text-center mb-5 mt-5">Admin Dashboard</h2>


    <div class="d-flex justify-content-center ">

        <div class="row">

            <div class="card me-3 cursor-pointer " style="width: 18rem;" onclick="window.location.href='adminUser.php'">
                <img src="Resources/Img/icon/admin_dashboard/user_management.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="text-center">User Management</h5>
                    <p class="card-text"></p>
                </div>
            </div>

            <div class="card me-3 cursor-pointer" style="width: 18rem;" onclick="window.location.href='adminProduct.php'">
                <img src="Resources/Img/icon/admin_dashboard/product_management.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="text-center">Product Management</h5>
                    <p class="card-text"></p>
                </div>
            </div>

            <div class="card me-3 cursor-pointer" style="width: 18rem;" onclick="window.location.href='adminStock.php'">
                <img src="Resources/Img/icon/admin_dashboard/stock_management.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="text-center">Stock Management</h5>
                    <p class="card-text"></p>
                </div>
            </div>

            <div class="card me-3 cursor-pointer" style="width: 18rem;" onclick="window.location.href='adminReport.php'">
                <img src="Resources/Img/icon/admin_dashboard/reports.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="text-center"> Reports</h5>
                    <p class="card-text"></p>
                </div>
            </div>

        </div>
    </div>


<script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>