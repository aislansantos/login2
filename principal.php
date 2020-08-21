<?php
session_start();

if ($_SESSION['ativo'] != true) {
    header("Location: login.php");
}

require 'menu.php';
?>


<div>

</div>
</div>
</body>

</html>