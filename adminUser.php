

    <!DOCTYPE html>
    <html lang="en" data-bs-theme="dark">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap.css" />
        <link rel="stylesheet" href="style.css" />
        <title>Online Store - Admin Dashboard</title>
    </head>
    <style>
    .table,
    .table th,
    .table td {
        background-color: transparent !important;
    }
</style>


    <body class="admin_user bg-transparent" onload="loadUser();">

       

        <div class="col-12 container">
            <h2 class="text-center mb-5 mt-5">User Management</h2>

            <div class="row d-flex justify-content-end mt-4">

                <div class="d-none" id="msgDiv" onclick="reload();">
                    <div class="alert alert-danger" id="msg"></div>
                </div>

                <div class="col-2">
                    <input type="text" class="form-control" placeholder=" User Id" id="uid"/>
                </div>

                <button class="btn btn-danger col-2" onclick="updateUserStatus();">Change Status</button>

            </div>

            <div class="mt-3">
                <table class="table table-hover">
                    <thead>
                        <tr >
                            <th class="text-danger" scope="col">User Id</th>
                            <th class="text-danger" scope="col">First Name</th>
                            <th class="text-danger" scope="col">Last Name</th>
                            <th class="text-danger" scope="col">Email</th>
                            <th class="text-danger" scope="col">Mobile</th>
                            <th class="text-danger" scope="col">Status</th>
                        </tr> 
                    </thead>
                    <tbody id="tb">
                        <!-- Table Row -->

                        <!-- Table Row -->
                    </tbody>
                </table>
            </div>
        </div>

      



        <script src="script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    </body>

    </html>


