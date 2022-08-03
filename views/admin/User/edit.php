<?php
include 'C:\laragon\www\Recruitment-Manager\controller\UserController\show.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit User</title>
    <link rel="stylesheet" href="../../../Public/css/login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body style="background-color: #e9ecef;">
    <div class="container">
        <div class="mt-5 d-flex justify-content-center">
            <div class="card-primary border border-primary" style="width: 40%; margin-top: 220px;">
                <div class="card-header text-center">
                    <a href="#" class="h1"><b>Edit User</b></a>
                </div>
                <div class="card-body">
                    <form action="../../../controller/UserController/update.php" method="POST">
                        <div class="input-group mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Name">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group d-flex">
                            <label>Role:</label>
                            <div class="custom-control custom-radio ml-5">
                                <input class="custom-control-input" value="1" type="radio" id="active" name="role">
                                <label for="active" class="custom-control-label">Có</label>
                            </div>
                            <div class="custom-control custom-radio ml-5">
                                <input class="custom-control-input" value="0" type="radio" id="no_active" name="role">
                                <label for="no_active" class="custom-control-label">Không</label>
                            </div>
                        </div>
                        <div class="text-center mt-3 mb-3">
                            <button type="submit" name="update" class="btn btn-primary btn-block">Save</button>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.login-box -->
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/9ff611514c.js" crossorigin="anonymous"></script>
</body>

</html>