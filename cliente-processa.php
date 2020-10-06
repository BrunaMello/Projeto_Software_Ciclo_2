<?php

// Importar o arquivo de conexão
require_once 'conexao.php';
// Importar o arquivo responsável pelo modelo de dados de clientes
require_once 'cliente-db.php';
// Certificar que uma ação foi requisitada
if ( ! isset( $_REQUEST['acao'] ) )
    return header( 'Location: cliente-lista.php' );
// Executar ação
switch ( $_REQUEST['acao'] ) {

    case 'salvar':
        // Pegar ID do registro
        $id = $_POST['id'];

        // Validar campos obrigatórios
        if ( empty( $_POST['cpf'] ) || empty( $_POST['nome'] ) || empty( $_POST['email'])) {
        return header( 'Location: cliente-form.php?erro=1' . ( ! empty(
            $id ) ? "&id=$id" : '' ) );
 }

 // Verificar se o registro é novo
 if ( empty( $id ) )
     inserir_cliente( $_POST );
 else
     alterar_cliente( $_POST );
 break;

    case 'excluir':
        excluir_cliente( $_GET['id'] );
        break;

    default:
        break;
}
// Redirecionar para a página cliente-lista.php
header( 'Location: cliente-lista.php' );
?>
