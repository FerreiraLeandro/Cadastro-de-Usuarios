<?php
    if(!empty($_GET['id']))
    {
        include_once('config.php');

        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM usuarios WHERE id =$id";

        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data ['nome'];
                $email = $user_data ['email'];
                $senha = $user_data ['senha'];
                $telefone = $user_data ['telefone'];
                $sexo = $user_data ['sexo'];
                $data_nasc = $user_data ['data_nasc'];
                $cidade = $user_data ['cidade'];
                $estado = $user_data ['estado'];
                $endereco = $user_data ['endereco'];
            }
        }
        else{
            header('Location: lista_dados.php');
        }
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
        <a href="lista_dados.php"><img src="images/seta.png" height="50px" alt="Voltar"></a>
    </div>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend>Formulário de Clientes</legend>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" value="<?php echo $nome?>" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div> 
                <div class="inputBox">
                    <input type="email" name="email" id="email" value="<?php echo $email?>" class="inputUser" required>
                    <label for="email" class="labelInput">e-mail</label>
                </div>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">senha</label>
                </div>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" value="<?php echo $telefone?>" class="inputUser" required>
                    <label for="tel" class="labelInput">Telefone</label>
                </div>
                <div class="genero">
                    <p>Sexo:</p>
                    <div>
                        <input type="radio" id="feminino" name="sexo" value="feminino"  <?php echo($sexo == 'feminino') ? 'checked' : '' ?> required>
                        <label for="feminino">Feminino</label>
                    </div>
                    <div>
                        <input type="radio" id="masculino" name="sexo" value="masculino" <?php echo ($sexo == 'masculino') ? 'checked' : '' ?> required>
                        <label for="masculino">Masculino</label>
                    </div>
                    <div>
                        <input type="radio" id="outro" name="sexo" value="outro"  <?php echo ($sexo == 'outro') ? 'checked' : '' ?> required>
                        <label for="outro">Outro</label>
                    </div>
                </div>
                    <div class="inputBox">
                    <label for="data_nasc">Data de Nascimento:</label>
                    <input type="date" name="data_nasc" id="data_nasc" value="<?php echo $data_nasc?>" class="inputDate" required>
                </div>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" value="<?php echo $cidade?>" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" value="<?php echo $estado?>" class="inputUser" required>
                    <label for="nome" class="labelInput">Estado</label>
                </div>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" value="<?php echo $endereco?>" class="inputUser" required>
                    <label for="nome" class="labelInput">Endereço</label>
                </div>
                <div class="inputBox">
                    <input type="hidden" name="id" value="<?php echo $id?>">
                    <input type="submit" name="atualizar" class="submit" value="Atualizar">
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>