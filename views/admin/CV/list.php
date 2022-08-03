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
    <link rel="stylesheet" href="../../../Public/css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

    <div class="container-fluid">
        <div class="l-sidebar" id="sidebar">
            <div class="sidebar mt-5">
                <div>
                    <a href="./index.php" class="sidebar__logo">
                        <img src="../../../Public/img/mor.jpg.png" alt="Insullusion" class="sidebar__logo-icon">
                    </a>
                    <div class="sidebar__toggle" id="sidebar-toggle">
                        <i class="fa-solid fa-arrow-right-arrow-left"></i>
                    </div>
                    <ul class="sidebar__list mt-5">
                        <a href="#" class=" sidebar__link active">
                            <i class="fa-solid fa-house mr-3 ml-1"></i>
                            <span class="sidebar__text">Home</span>
                        </a>
                        <a href="#" class="sidebar__link active">
                            <i class="fa-solid fa-user mr-3 ml-1"></i>
                            <span class="sidebar__text">User</span>
                        </a>
                        <a href="#" class="sidebar__link active">
                            <i class="fa-solid fa-file mr-4 ml-1"></i>
                            <span class="sidebar__text">CV</span>
                        </a>
                    </ul>
                </div>
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
                    <th>CV</th>
                    <th>Active</th>
                    <th>Update</th>
                    <th>Send Mail</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (is_array($fetchData)) {
                    $sn = 1;
                    foreach ($fetchData as $data) {
                ?>
                        <tr>
                            <td><?php echo $sn; ?></td>
                            <td><?php echo $data['name'] ?? ''; ?></td>
                            <td><?php echo $data['email'] ?? ''; ?></td>
                            <td><?php echo $data['phone'] ?? ''; ?></td>
                            <td><?php echo $data['file'] ?? ''; ?></td>
                            <td><?php
                                //  echo $data['active'] ?? '';
                                if ($data['active'] == 1) {
                                    echo '<span class="btn btn-danger btn-xs">NO</span>';
                                } else {
                                    echo '<span class="btn btn-success btn-xs">YES</span>';
                                }
                                ?></td>
                            <td style="width: 100px">
                                <a class="btn btn-primary btn-sm" href="./edit.php/id=<?php echo "$sn"  ?>">
                                    <i class="fa fa-pencil-square-o"></i>
                                </a>
                                <a class="btn btn-danger btn-sm" href="./edit.php/id=<?php echo "$sn"  ?>">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                            <td></td>
                        </tr>
                    <?php
                        $sn++;
                    }
                } else { ?>
                    <tr>
                        <td colspan="8">
                            <?php echo $fetchData; ?>
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
</body>

</html>