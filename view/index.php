<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

    <header>
        <div class="container">
            <nav class="navbar">
                <div class="navbar__logo">
                    <h2>Recruitment Manager</h2>
                </div>
                <ul class="navbar__links">
                    <li class="navbar__link"><a href="login.php">Login</a></li>
                    <li class="navbar__link"><a href="#">Register</a></li>
                    <a href="#"><button class="navbar__btn" data-toggle="modal" data-target="#myModal">Submit CV</button></a>
                </ul>
            </nav>
            <!-- The Modal -->
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Submit CV</h4>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                            <form action="../../index.html" method="post">
                                <div class="input-group mb-3">
                                    <input type="text" name="name" class="form-control" placeholder="Full name">
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
                                    <input type="text" name="phone" class="form-control" placeholder="Phone">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="file" name="cv" class="form-control" placeholder="Retype password">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fa-solid fa-file"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-sucess btn-block">Register</button>
                                    </div>
                                    <div class="col-3"></div>
                                    <!-- /.col -->
                                </div>
                            </form>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="menu">
        <div class="container">
            <nav class="main-menu">
                <ul class="nav mb-1">
                    <li class="menu__link"><a href="#">Quản Lý User</a></li>
                    <li class="menu__link"><a href="#">Quản Lý CV</a></li>
                </ul>
            </nav>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/9ff611514c.js" crossorigin="anonymous"></script>
</body>

</html>