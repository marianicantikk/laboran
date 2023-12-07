<?php

include "inc/Connection.php";

$query = "SELECT * FROM user";
$x = mysqli_query($conn, $query);
$item = [];
while ($row = mysqli_fetch_assoc($x)) {
    $item[] = $row;
}
if (count($item)==0) {
    $hash = password_hash('Admin', PASSWORD_DEFAULT);
    $qInsert = "INSERT INTO user (username, password, akses,) VALUES('Admin', '$hash', 'Admin')";
    $xInsert = mysqli_query($conn, $qInsert);
}

?>

<!doctype html>
<html lang="en">

<head>
    <title>Login User</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body style="background-color: grey;">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h4>Form Login</h4>
                <from action="proses.php" method="post"></from>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Username anda">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" class="form-control" name="password" placeholder="Password anda">
                </div>
                <div class="form-group">
                    <button type="submit" name="login" class=" btn btn-primary btn-sm">Login</button>
                </div>
            </div>
        </div>
    </div>
    <script src=" https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>