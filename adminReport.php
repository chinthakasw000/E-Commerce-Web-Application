<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Store - Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body class="bg-transparent admin_report">

<h2 class="text-center mt-5 mb-5">Report Dashboard</h2>
    <div class="d-flex justify-content-center">

        <div class="row">

            <div class="card me-3 cursor-pointer" style="width: 18rem;" onclick="window.location.href='adminReportStock.php'">
                <img src="Resources/Img/icon/admin_report/stock_report.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="text-center">Stock Reports</h5>
                    <p class="card-text"></p>
                </div>
            </div>

            <div class="card me-3 cursor-pointer" style="width: 18rem;" onclick="window.location.href='adminReportProduct.php'">
                <img src="Resources/Img/icon/admin_report/product_report.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="text-center"> Product Report</h5>
                    <p class="card-text"></p>
                </div>
            </div>

            <div class="card me-3 cursor-pointer" style="width: 18rem;" onclick="window.location.href='adminReportUser.php'">
                <img src="Resources/Img/icon/admin_report/user_report.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="text-center"> User Report</h5>
                    <p class="card-text"></p>
                </div>
            </div>

           

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
