<?php


// Importar o arquivo de conexão
require_once 'conexao.php';
// Importar o arquivo responsável pelo modelo de dados de clientes
require_once 'cliente-db.php';
// Buscar todos os clientes
$clientes = filtrar_todos_clientes();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Clientes</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="page-header">
        <h1>Cadastro de Clientes</h1>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <a href="cliente-form.php" class="btn btn-primary">Novo</
            a>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ( $clientes as $cliente ) : ?>
        <tr>
            <td><?php echo $cliente['id']; ?></td>
            <td><?php echo $cliente['nome']; ?></td>
            <td><?php echo $cliente['email']; ?></td>
            <td class="text-right">
                <a href="cliente-form.php?id=<?php echo
                $cliente['id']; ?>" class="btn btn-primary">Editar</a>
                <a href="cliente-processa.php?acao=excluir&id=<?php echo $cliente['id']; ?>" class="btn btn-danger" onclick="return confirm('Confirma a exclusão?');">Excluir</a>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>

