<?php

session_start();

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "admin" && $password == "admin") {
        header("Location: halaman_admin.php");
        $_SESSION["username"] = $username;
        exit;
    } else {
        $error = "Username atau password salah";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 6 | GET & POST</title>

    <link rel="stylesheet" href="assets/style.css">
    <style>

    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <?php if (isset($error)) : ?>
                <div id="alert" class="alert">
                    <p style="text-align: center;"><?= $error ?></p>
                </div>
            <?php endif ?>
            <div class="card-header">
                <h2 style="text-align:center">Login</h2>
            </div>
            <div class="card-body">
                <form action="login.php" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" placeholder="Masukkan username..." />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Masukkan password..." />
                    </div>
                    <button name="login" id="login" class="btn btn-login">
                        Login
                    </button>
                </form>
            </div>
        </div>
    </div>


    <script>
        setTimeout(() => {
            document.getElementById("alert").style.display = "none";
        }, 4000);
    </script>
</body>

</html>