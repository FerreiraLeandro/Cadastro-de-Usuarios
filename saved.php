<?php

    include_once('config.php');

    if(isset($_POST['atualizar']))
    {
        $nome = $_POST ['nome'];
        $email = $_POST ['email'];
        $senha = $_POST ['senha'];
        $telefone = $_POST ['telefone'];
        $sexo = $_POST ['sexo'];
        $data_nasc = $_POST ['data_nasc'];
        $cidade = $_POST ['cidade'];
        $estado = $_POST ['estado'];
        $endereco = $_POST ['endereco'];

        $sqlUpdate = "UPDATE usuarios SET nome='$nome',email='$email', senha='$senha',telefone='$telefone', sexo='$sexo', data_nasc='$data_nasc', cidade='$cidade', estado='$estado', endereco='$endereco' WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);
    }
    header('Location: lista_dados.php')
?>