<?php
session_start();

if (isset($_SESSION) || $_SESSION['ativo'] == false) {
    header("Location: login.php");
}

if ($_GET("acao = sair")) {
    session_destroy();
    header("Location: login.php");
}
