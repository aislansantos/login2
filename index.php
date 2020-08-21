<?php
session_start();

header("Location: login.php");

if ($_GET['acao'] == "sair") {
    session_destroy();
    header("Location: login.php");
}


if ($_SESSION['ativo'] == true) {
    header("Location: principal.php");
}
