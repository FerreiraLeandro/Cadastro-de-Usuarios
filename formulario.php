<?php
    if(isset($_POST['submit']))
    {
        include_once('config.php');
    
        $nome = $_POST ['nome'];
        $email = $_POST ['email'];
        $senha = $_POST ['senha'];
        $telefone = $_POST ['telefone'];
        $sexo = $_POST ['sexo'];
        $data_nasc = $_POST ['data_nasc'];
        $cidade = $_POST ['cidade'];
        $estado = $_POST ['estado'];
        $endereco = $_POST ['endereco'];
    
        $result = mysqli_query($conexao, "INSERT INTO formulario.usuarios(nome, email, senha, telefone, sexo, data_nasc, cidade, estado, endereco)
        VALUES ('$nome', '$email','$senha', '$telefone','$sexo','$data_nasc', '$cidade', '$estado', '$endereco')");

        header('Location: tela-de-login.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | LF</title>
    <link rel="stylesheet" href="./css/form.css">
</head>
<body>
    <div>
        <a href="tela_inicial.php"><img src="images/seta.png" height="50px" alt="Voltar"></a>
    </div>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend>Formulário de Clientes</legend>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">e-mail</label>
                </div>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">senha</label>
                </div>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="tel" class="labelInput">Telefone</label>
                </div>
                <div class="genero">
                    <p>Sexo:</p>
                    <div>
                        <input type="radio" id="feminino" name="sexo" value="feminino" required>
                        <label for="feminino">Feminino</label>
                    </div>
                    <div>
                        <input type="radio" id="masculino" name="sexo" value="masculino" required>
                        <label for="masculino">Masculino</label>
                    </div>
                    <div>
                        <input type="radio" id="outro" name="sexo" value="outro" required>
                        <label for="outro">Outro</label>
                    </div>
                </div>
                    <div class="inputBox">
                    <label for="data_nasc">Data de Nascimento:</label>
                    <input type="date" name="data_nasc" id="data_nasc" class="inputDate" required>
                </div>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="nome" class="labelInput">Estado</label>
                </div>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="nome" class="labelInput">Endereço</label>
                </div>
                <div class="inputBox">
                    <input type="submit" name="submit" class="submit">
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>