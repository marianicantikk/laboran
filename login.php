<?php
include "inc/Connection.php";
$conn = new Connection();

$string = "SELECT COUNT(*) from user";
$trx = $conn->conn->prepare($string);
$trx->execute();
if ($trx->fetchColumn() == 0) {
    $pass = password_hash("ani123", PASSWORD_DEFAULT);
    $query = "INSERT INTO user(username, password, akses) values('Admin', '$pass', 'Admin')";
    $add = $conn->conn->prepare($query);
    $add->execute();
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <title>Educational Bootstrap 5 Login Page Website Tampalte</title>
</head>

<body>
    <section class="form-02-main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="_lk_de">
                        <div class="form-03-main">
                            <div class="logo">
                                <img src="assets/images/user.png">
                            </div>
                            <form action="app/proses.php" method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username"
                                        class="form-control _ge_de_ol" placeholder="Username anda">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control _ge_de_ol" name="password"
                                        placeholder="Password anda">
                                </div>

                                <div class="form-group">
                                    <div class="_btn_04">
                                        <button type="submit" name="login"
                                            class=" btn btn-primary btn-sm">Login</button>
                                        <button type="reset" name="reset" class=" btn btn-danger btn-sm">Reset</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
<?php

session_start();
if (isset($_SESSION["isLogin"])) {
    // echo "<script>alert('gagal')</script>";
    header("Location: index.php");
}
?>