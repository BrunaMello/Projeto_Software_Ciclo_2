<?php

    /*
     * Script responsável pelo modelo de dados de clientes
     */
    // Buscar cliente por id
    function filtrar_cliente_por_id( $id ) {
        global $conexao;

        // Impedir SQL Injection
        $id = mysqli_real_escape_string( $conexao, $id );

     // Comando SQL para selecionar registro por ID
        $sql = "SELECT * FROM clientes WHERE id = '$id'";

     // Executa comando SQL
     $resultado = mysqli_query( $conexao, $sql );

     // Retorna registro encontrado
     return mysqli_fetch_assoc( $resultado );
    }

    // Buscar todos os clientes
    function filtrar_todos_clientes() {
        global $conexao;

        // Comando SQL para selecionar todos os registros
        $sql = "SELECT * FROM clientes";

     // Executa comando SQL
     $clientes = mysqli_query( $conexao, $sql );

     // Retorna todos os registros encontrados
     return $clientes;
    }
    // Inserir cliente
    function inserir_cliente( $cliente ) {
        global $conexao;
        // Impedir SQL Injection
        $cpf = mysqli_real_escape_string( $conexao, $cliente['cpf'] );
        $nome = mysqli_real_escape_string( $conexao, $cliente['nome'] );
        $cep = mysqli_real_escape_string( $conexao, $cliente['cep'] );
        $endereco = mysqli_real_escape_string( $conexao, $cliente['endereco'] );
        $numero = mysqli_real_escape_string( $conexao, $cliente['numero'] );
        $bairro = mysqli_real_escape_string( $conexao, $cliente['bairro'] );
        $cidade = mysqli_real_escape_string( $conexao, $cliente['cidade'] );
        $uf = mysqli_real_escape_string( $conexao, $cliente['uf'] );
        $telefone = mysqli_real_escape_string( $conexao, $cliente['telefone'] );
        $email = mysqli_real_escape_string( $conexao, $cliente['email'] );

        // Comando SQL para selecionar todos os registros
        $sql = "INSERT INTO clientes (cpf, nome, cep, endereco, numero, bairro, cidade, uf, telefone, email) VALUES ('$cpf', '$nome', '$cep', '$endereco', '$numero', '$bairro', '$cidade', '$uf', '$telefone', '$email')";

        // Executa comando SQL
     $resultado = mysqli_query( $conexao, $sql );

     // Retorna resultado da transação
     return $resultado;
    }
    // Alterar dados do cliente
    function alterar_cliente( $cliente ) {
        global $conexao;
        // Impedir SQL Injection
        $id = mysqli_real_escape_string( $conexao, $cliente['id'] );
        $cpf = mysqli_real_escape_string( $conexao, $cliente['cpf'] );
        $nome = mysqli_real_escape_string( $conexao, $cliente['nome'] );
        $cep = mysqli_real_escape_string( $conexao, $cliente['cep'] );
        $endereco = mysqli_real_escape_string( $conexao, $cliente['endereco'] );
        $numero = mysqli_real_escape_string( $conexao, $cliente['numero'] );
        $bairro = mysqli_real_escape_string( $conexao, $cliente['bairro'] );
        $cidade = mysqli_real_escape_string( $conexao, $cliente['cidade'] );
        $uf = mysqli_real_escape_string( $conexao, $cliente['uf'] );
        $telefone = mysqli_real_escape_string( $conexao, $cliente['telefone'] );
        $email = mysqli_real_escape_string( $conexao, $cliente['email'] );

        // Comando SQL para selecionar todos os registros
        $sql = " UPDATE clientes" .
            " SET cpf = '$cpf', nome = '$nome', cep = '$cep', endereco = '$endereco', numero = '$numero', bairro = '$bairro', cidade = '$cidade', uf = '$uf', telefone = '$telefone', email = '$email'"
            ."WHERE id = '$id' ";
     // Executa comando SQL
     $resultado = mysqli_query( $conexao, $sql );
     // Retorna resultado da transação
     return $resultado;
    }


    // Excluir cliente
    function excluir_cliente( $id ) {
        global $conexao;
        // Impedir SQL Injection
        $id = mysqli_real_escape_string( $conexao, $id );

        // Comando SQL para selecionar todos os registros
        $sql = "DELETE FROM clientes WHERE id = '$id'";
     // Executa comando SQL
     $resultado = mysqli_query( $conexao, $sql );
     // Retorna resultado da transação
     return $resultado;
    }

?>
