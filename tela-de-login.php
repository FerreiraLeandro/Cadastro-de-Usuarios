<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <div>
        <a href="tela_inicial.php"><img src="images/seta.png" height="50px" alt="Voltar"></a>
    </div>
    <div class="tela-login">
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
            <input class="entrada" name="email" type="text" placeholder="E-mail"><br><br>
            <input class="entrada" name="senha" type="password" placeholder="Senha"><br><br>
            <input type="submit" name="submit" class="submit" value="Enviar">
        </form>
    </div>
</body>
</html>