<?php
session_start();
if (isset($_SESSION['ativo'])) {
    if ($_SESSION['ativo'] == true) {
        header("Location: principal.php");
    }
}

require 'config.php';
require 'assets/class/login.class.php';

if (isset($_POST['user']) && !empty($_POST['email'])) {
    $user = filter_input(INPUT_POST, 'user');
    $email = filter_input(INPUT_POST, 'email');

    $login = new Login($pdo);
    $login->setUser($user);
    $login->setEmail($email);

    $login->login();
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div>
            <form action="" method="post">
                <label for="">
                    User
                    <input type="text" name="user" id="user">
                </label>
                <br><br>
                <label for="">
                    E-mail
                    <input type="email" name="email" id="email">
                </label>
                <br><br>
                <input type="submit" value="Entrar">
            </form>
        </div>
    </div>
</body>

</html>