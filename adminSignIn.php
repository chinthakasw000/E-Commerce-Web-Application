<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css" />
    <title>Online Store - Admin Login</title>
</head>

<body class="adminsignInBody bg-transparent text-white">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="card shadow-sm border-0 bg-transparent"> 
                    <div class="card-body bg-transparent">
                        <h2 class="text-center mb-4 text-white">Admin Login</h2>
                        <div class="text-center mb-3">
                            <img src="Resources/icon/admin_signin/admin.png" class="admin_signin_icon" width="100px" alt="">
                        </div>

                        <form>
                            <div class="form-group">
                                <label for="username" class="text-white">Username:</label>
                                <input type="text" class="form-control bg-transparent text-white" id="un" placeholder="Ex: Sahan">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-white">Password:</label>
                                <input type="password" class="form-control bg-transparent text-white" id="pw" placeholder="Ex: ********">
                            </div>

                            <div class="d-none" id="msgDiv">
                                <div class="alert alert-danger text-white" id="msg"></div>
                            </div>

                            <button type="button" class="btn btn-secondary btn-block" onclick="adminSignIn();">Sign In</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
    <script src="script.js"></script>
</body>

</html>