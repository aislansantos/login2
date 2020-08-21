<?php
session_start();

if ($_SESSION['ativo'] != true) {
    header("Location: login.php");
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
            <h1>Menu</h1>
            <a href="index.php?acao=sair">Sair</a>
        </div>
    </div>
</body>

</html>