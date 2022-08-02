<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Submit CV</title>
    <link rel="stylesheet" href="../Public/css/login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body class="login-page">
    <div id="content" class="container text-center">
        <h1> Edit User </h1>
    </div>
    <div class="align-items-center justify-content-center">
        <form action="" method="post">
            <input type="hidden" name="_method" value="put" />
            <div class="form-group ">
                Name: <input type="text" name="name" placeholder="input name"><br>
                Email: <input type="email" name="email" placeholder="input email"><br>
                Password: <input type="password" name="password" required><br>
            </div>
            <div class="form-group ">
                <button style="height:40px; width:100px" name="submitUser" class=" ml-2 btn-warning" type="submit">Lưu</button>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/9ff611514c.js" crossorigin="anonymous"></script>
</body>

</html>