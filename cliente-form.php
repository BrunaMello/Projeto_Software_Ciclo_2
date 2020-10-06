<?php
// Importar o arquivo de conexão
require_once 'conexao.php';
// Importar o arquivo responsável pelo modelo de dados de clientes
require_once 'cliente-db.php';
// Cliente em vetor
$cliente = array(
    'id' => '',
    'cpf' => '',
    'nome' => '',
    'cep' => '',
    'endereco' => '',
    'numero' => '',
    'bairro' => '',
    'cidade' => '',
    'uf' => '',
    'telefone' => '',
    'email' => ''
);
// Verifica que o ID do cliente foi passado via URL
if ( isset( $_GET['id'] ) && ! empty( $_GET['id'] ) ) {

    // Buscar cliente pelo ID
    $cliente = filtrar_cliente_por_id( $_GET['id'] );
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Clientes</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="page-header">
        <h1>Cadastro de Clientes</h1>
    </div>
    <?php if ( isset($_GET['erro']) && $_GET['erro'] == '1' ) : ?>
        <div class="alert alert-danger">
            Verifique os campos obrigatórios
        </div>
    <?php endif; ?>
    <form action="cliente-processa.php" method="post">
        <input type="hidden" name="id" value="<?php echo
        $cliente['id']; ?>">
        <input type="hidden" name="acao" value="salvar">
        <div class="form-group">
            <label for="cpf">CPF *</label>
            <input type="text" name="cpf" id="cpf" class="form-control" value="<?php echo $cliente['cpf']; ?>" maxlength="11">
        </div>
        <div class="form-group">
            <label for="nome">Nome *</label>
            <input type="text" name="nome" id="nome" class="form-control" value="<?php echo $cliente['nome']; ?>" maxlength="45">
        </div>
        <div class="form-group">
            <label for="cep">CEP</label>
            <input type="text" name="cep" id="cep" class="form-control" value="<?php echo $cliente['cep']; ?>" maxlength="9">
        </div>
        <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" id="endereco"
                   class="form-control" value="<?php echo $cliente['endereco']; ?>" maxlength="60">
        </div>
        <div class="form-group">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero"
                   class="form-control" value="<?php echo $cliente['numero']; ?>" min="1"
                   max="99999999">
        </div>
        <div class="form-group">
            <label for="bairro">Bairro</label>
            <input type="text" name="bairro" id="bairro" class="formcontrol" value="<?php echo $cliente['bairro']; ?>" maxlength="45">
        </div>
        <div class="form-group">
            <label for="cidade">Cidade</label>
            <input type="text" name="cidade" id="cidade" class="formcontrol" value="<?php echo $cliente['cidade']; ?>" maxlength="45">
        </div>
        <div class="form-group">
            <label for="uf">UF</label>
            <input type="text" name="uf" id="uf" class="form-control"
                   value="<?php echo $cliente['uf']; ?>" maxlength="2">
        </div>
        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" id="telefone"
                   class="form-control" value="<?php echo $cliente['telefone']; ?>" maxlength="16">
        </div>
        <div class="form-group">
            <label for="email">E-mail *</label>
            <input type="text" name="email" id="email" class="formcontrol" value="<?php echo $cliente['email']; ?>" maxlength="120">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
    <br>
</div>
</body>
</html>