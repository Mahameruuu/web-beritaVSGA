<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN | Sistem Informasi BPSDMP 2023</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
</head>
<body>
    <?php include('template/_navbar.php');?>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="card mt-3 w-50 justify-content-center">
                <div class="card-header fw-bold"><h4 class="card-title">LOGIN</h4></div>
                    <div class="card-body">
                        <form action="apps/cek_login.php" method="GET">
                            <div class="mb-3">
                                <label for="username" class="form-label">Email</label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="username@mail.com">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="***********">
                            </div>

                            <button type="submit" class="btn btn-primary w-100">LOGIN</button><br>
                        </form>
                </div>
            </div>
            <!--End : isi -->
        </div>
    </div>
</body>

<?php include('template/_footer.php');?>

<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>