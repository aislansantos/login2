<?php
session_start();
require('config.php');
require('assets/class/usuarios.class.php');

if ($_SESSION['ativo'] != true) {
    header("Location: login.php");
}

$usuario = new Usuarios($pdo);

require 'menu.php';
?>

<div class="container">
    <div>
        <h5>Cadastro de Usuários</h5>
        <hr>
        <a href="usuario_cadastro.php" class="btn btn-info">Novo</a>
        <table id="table_id" class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
            $lista = $usuario->listarUsuarios();
            foreach ($lista as $item) :
            ?>
                <tr>
                    <td><?php echo $item['nome']; ?></td>
                    <td><?php echo $item['email']; ?></td>
                    <td>
                        <a href="usuario_Cadastro.php?id=<?php echo $item['id']; ?>" class="btn btn-info">Editar</a>
                        <a href="#" class="btn btn-info">Excluir</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <script>
            $(document).ready(function () {
                $('#table_id').DataTable({

                    scrollY: '50vh',
                    scrollCollapse: true,
                    paging: false,


                    "language": {
                        "lengthMenu": "Mostrando _MENU_ registros por pagina",
                        "zeroRecords": "Nada encontrado",
                        "info": "",
                        "infoEmpty": "Nenhum registro disponivel",
                        "infoFiltered": "(Filtrado de _MAX_ total registros)",
                        "search": "Pesquisar:",
                    }


                });
            });
        </script>


    </div>
</div>

</body>

</html>