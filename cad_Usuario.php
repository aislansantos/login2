<?php
session_start();

if ($_SESSION['ativo'] != true) {
    header("Location: login.php");
}

require 'confgig.php';
require 'assets/class/usuarios.class.php';




?>

<?php require 'menu.php' ?>
<div class="container">
    <h4>Cadastro de Usuário</h4>
    <hr>
    <div>
        <form class="formulario">
            <div class="form-group">
                <label for="">Nome:</label>
                <input type="text" class="form-control name" id="nameUser">
            </div>
            <div class="form-group">
                <label for="">E-mail</label>
                <input type="email" class="form-control email" id="emailUser">
            </div>
            <div class="form-group">
                <label for="" >Tipo</label>
                <select class = "form-control name">
                    <option value="#">Selecione</option>
                    <option value="adm">Administrador</option>
                    <option value="op">Operador</option>
                </select>
            </div>
            <button type="submit" class="btn btn-info btn-md">Submit</button>
        </form>

        <table>

        </table>
    </div>

</div>
</body>

</html>