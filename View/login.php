<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kallto Agrosolutions</title>
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <main>
    <a href="../index.php">voltar</a>
        <h1>Faça seu login na <br> Kallto AgroSolutions !</h1>
        <form method="POST" action="../Controller/loginController.php">
            <label>Email</label>
            <input type="text" name="usuario" placeholder="Digite o seu email"><br><br>

            <label>Senha</label>
            <input type="password" name="senha" placeholder="Digite a sua senha"><br><br>

            <button name="btnLogin" value="Acessar">ENTRAR</button>

            <a href="cadastro.php" ><span style="color:yellow"></span><h4>Você ainda não possui uma conta?</h4></a>
        </form>
    </main>
</body>

</html>