<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

</head>
<body>
    <!-- nav bar  -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="Resources/photo/logo/Sri Laptop.svg" width="50px" alt="" srcset="" >
            Sri Laptop
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item me-5">
                    <a class="nav-link active" aria-current="page" href="profile.php">User Profile</a>
                </li>
                <li class="nav-item me-5">
                    <a class="nav-link active" aria-current="page" href="#">History</a>
                </li>
                <li class="nav-item me-5">
                    <a class="nav-link active" aria-current="page" href="#">Cart</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link active" aria-current="page" href="#" onclick="signOut();">Sign Out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
<script src="script.js"></script>
</body>
</html>