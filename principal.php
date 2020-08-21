<?php
session_start();

if ($_SESSION['ativo'] != true) {
    header("Location: login.php");
}

require 'menu.php';
?>

<div class="container">
    <div>
        <p>bem vindo <?= ucfirst($_SESSION['user']); ?> !</p>
    </div>
</div>

</body>

</html>