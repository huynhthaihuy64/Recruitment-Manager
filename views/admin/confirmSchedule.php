<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Confirm Schedule</title>
    <link rel="stylesheet" href="../../Public/css/login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body class="login-page">
    <div class="container">
        <div class="login-box">
            <!-- /.login-logo -->
            <div class="login-card card-primary">
                <div class="card-header text-center">
                    <a href="#" class="h1"><b>Confirm Schedule</b></a>
                </div>
                <div class="card-body">
                    <form action="../../controller/Schedule/confirmSchedule.php" method="POST">
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
                            <input type="datetime-local" name="date" class="form-control">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fa-solid fa-calendar"></span>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-3 mb-3">
                            <button type="submit" name="confirm" class="btn btn-primary btn-block">Confirm</button>
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