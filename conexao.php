<?php
// Variáveis de conexão

$link = mysqli_connect("127.0.0.1", "root", "bru011991", "locadora");

if (!$link) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL." . PHP_EOL;

mysqli_close($link);
?>
