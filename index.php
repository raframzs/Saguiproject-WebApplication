<?php
    
    require 'content/includes/init.php';
    ob_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $conn = require 'content/includes/db.php';

        if (User::authenticate($conn, $_POST['username'], $_POST['password'])) {
            Auth::loggin();
            Url::redirect('/main.php');
        } else {

            $error = 'loggin incorrect.';
        }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head><meta charset="euc-jp">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/content/CSS/login.css">
    <title>Buscador SAGUI</title>
</head>

<body>
    <div class="login-page">
        <div class="form">
            <form method="post" class="login-form" autocomplete="off">
                <input name="username" type="text" placeholder="Nombre de Usuario" />
                <input name="password" type="password" placeholder="Contraseña" />
                <button type="submit">login</button>
                <p class="message">Not registered? <a href="#">Create an account</a></p>
            </form>
        </div>
    </div>
    <?php require 'content/includes/footer.php'; ?>