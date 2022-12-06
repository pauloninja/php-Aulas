<?php

$dsn = 'mysql:host=localhost;dbname=php_com_pdo';
$usuario = 'root';
$senha = '';

try {
    //code...
    $conexao = new PDO($dsn, $usuario, $senha);

    $query = '
        create table tb_usuarios(
            id int not null primary Key auto_incremente,
            nome varchar(50) not null,
            email varchar(100) not null,
            senha varchar(32) not null
            )
        ';
    $retorno = $conexao->exec($query);
    //0 retorno
    echo  $retorno;
} catch (PDOException $e) {
    //throw $th
    echo 'Erro: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage();
    //registra erro
}


