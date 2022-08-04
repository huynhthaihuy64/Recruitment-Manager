<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link rel="stylesheet" href="../../Public/css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body id="body">
    <header>
        <div class="container-fluid">
            <div class="l-sidebar" id="sidebar">
                <div class="wrapper">
                    <nav id="sidebar">
                        <a href="./index.php" class="sidebar__logo">
                            <img src="../../Public/img/mor.jpg.png" alt="Insullusion" class="sidebar__logo-icon">
                        </a>
                        <div class="sidebar__toggle" id="sidebar-toggle">
                            <i class="fa-solid fa-arrow-right-arrow-left"></i>
                        </div>
                        <ul class="sidebar__list components">
                            <li class="active">
                                <a href="#listUser" data-toggle="collapse" aria-expanded="false" class="sidebar__link dropdown-toggle">User</a>
                                <ul class="collapse" id="listUser">
                                    <li>
                                        <a href="./listUser.php" class="sidebar__link w-50" aria-expanded="false">List User</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="active">
                                <a href="#listCv" data-toggle="collapse" aria-expanded="false" class="sidebar__link dropdown-toggle">Cv</a>
                                <ul class="collapse" id="listCv">
                                    <li>
                                        <a href="./listCv.php" class="sidebar__link w-50">List CV</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="active">
                                <a href="#listConfirm" data-toggle="collapse" aria-expanded="false" class="sidebar__link dropdown-toggle">Confirm Schedule</a>
                                <ul class="collapse" id="listConfirm">
                                    <li>
                                        <a href="./listConfirm.php" class="sidebar__link w-50">List Confirm</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <nav class="navbar justify-content-end">
                <ul class="navbar__links">
                    <li class="navbar__link"><a>
                            <?php
                            if (isset($_SESSION['email']) && $_SESSION['email']) {
                                echo  '<a href="#" class="mr-5">' . $_SESSION['email'] . "</a> " . '<a href="../../controller/UserController/logout.php" class="ml-2">' . 'Logout' . "</a>";
                            }
                            ?>
                        </a></li>
                    <li class="navbar__link"><a href="../submit-cv.php">Submit CV</a></li>
                    <li class="navbar__link"><a href="./confirmSchedule.php">Confirm Schedule</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col-6">
                <div class="card">
                    <img src="../../Public/img/slide1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <img src="../../Public/img/slide1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <img src="../../Public/img/slide1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <img src="../../Public/img/slide1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/9ff611514c.js" crossorigin="anonymous"></script>
    <script src="../../Public/js/main.js"></script>
</body>

</html>