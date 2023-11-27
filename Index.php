<!DOCTYPE html>
<html>
<head>
<title>Kallto AgroSolutions</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="img/logo.png" type="image/x-icon">
</head>
<body>
    <header>
    <div id="itens-cabecalho">
        <img src="img/logo.png" width="80px" height="80px" id="primeira-foto">
        <h1>KALLTTO</h1>
        <ul>
                <a href="index.php">Página Inicial</a>
                <a href="sobre.html">Sobre</a>
                <a href="servicos.html">Serviços</a>
                <a href="contato.html">Contato</a>
                <a href="view/cadastro.php">CADASTRE-SE</a>
        </ul>
    </div>
    </header>
    <main>

        <div id="servicos">
            <img src="img/fundoagricola2.jpg" width="100%" height="800px" margin="0">
        </div>

        <div class="cards-container">
    <div class="card">
        <img src="img/homem-plantando.jfif" alt="Imagem 1">
        <p>TENHA UMA MELHOR QUALIDADE DENTRO DA SUA FAZENDA</p>
    </div>
    <div class="card">
        <img src="img/homem-ppcnt.jfif" alt="Imagem 2">
        <p>MONITORE TUDO QUE ESTÁ ACONTECENDO DENTRO DO CAMPO</p>
    </div>
    <div class="card">
        <img src="img/mulher-milharal.jpg" alt="Imagem 3">
        <p>TENHA INCRÍVEIS RESULTADOS COM NOSSA AJUDA</p>
    </div>
</div>

                <div id="logokallto">
            <h2>Conheça a Solução Tech para sua fazenda<br> Entre em Contato conosco!</h2>
            <img src="img//logo.png" width="450px" height="450px" margin-left="80px">
        </div>
        <form action="" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br><br>

            <label for="numero">Telefone</label>
            <input type="number" id="telefone" name="telefone" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="problema">Digite sua necessidade:</label>
            <input type="text" id="problema" name="problema" required><br><br>

            <input type="submit" value="enviar" id="cadastrarbotao">
        </form>
            </div>
        </main>
        <footer>
                <p> &copy; Kallto AgroSolutions 2023<br> Todos os direitos reservados.</p>
        </footer>
</body>
</html>