<?php
    $dbHost = 'localhost:3306';
    $dbUsername = 'root';
    $dbPassword = '96819413Ll';
    $dbName = 'formulario';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    
    // if($conexao->connect_errno){
    //     echo "Erro";
    // }
    // else{
    //     echo "Conexão efetuada com sucesso!";
    // }
?>