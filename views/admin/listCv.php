<?php
include 'C:\laragon\www\Recruitment-Manager\controller\Cv\list.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List CV</title>
    <link rel="stylesheet" href="../../Public/css/main.css">
    <link rel=" stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

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
    </div>
    <h1 class="text-center mt-5">List Cv</h1>
    <div class="container mt-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>File</th>
                    <th>Active</th>
                    <th>Update</th>
                    <th>Send Mail</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (is_array($row)) {
                    $id = 1;
                    foreach ($row as $data) {
                ?>
                        <tr>
                            <td><?php echo $id; ?></td>
                            <td><?php echo $data['name'] ?? ''; ?></td>
                            <td><?php echo $data['email'] ?? ''; ?></td>
                            <td><?php echo $data['phone'] ?? ''; ?></td>
                            <!-- <td><img height="50px" src="../../Public/img/<?php echo $data['file']; ?>"></td> -->
                            <td><?php echo $data['file'] ?? ''; ?></td>
                            <td><?php
                                //  echo $data['active'] ?? '';
                                if ($data['active'] == 1) {
                                    echo '<span class="btn btn-danger btn-xs">NO</span>';
                                } else {
                                    echo '<span class="btn btn-success btn-xs">YES</span>';
                                }
                                ?></td>
                            <td style=" width: 100px">
                                <a class="btn btn-primary btn-sm" href="./editCv.php?id=<?php echo $data['id']  ?>">
                                    <i class="fa fa-pencil-square-o"></i>
                                </a>
                                <a class="btn btn-danger btn-sm" href="../../controller/Cv/delete.php?id=<?php echo $data['id']  ?>">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                            <td><a class="btn btn-success btn-sm" href="../../controller/Cv/sendmail.php?email=<?php echo $data['email'] ?>">
                                    Send Mail
                                </a></td>
                        </tr>
                    <?php
                        $id++;
                    }
                } else { ?>
                    <tr>
                        <td colspan="8">
                            <?php echo $row; ?>
                        </td>
                    <tr>
                    <?php
                } ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/9ff611514c.js" crossorigin="anonymous"></script>
    <script src="../../Public/js/main.js"></script>
</body>

</html>