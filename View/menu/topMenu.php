<?php
    session_start();
    if(empty($_SESSION)){
        echo"<script>alert('algo deu errado');
            location.href='../index.php'
            </script>";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KALLTTO</title>
    <link rel="stylesheet" href="../css/perfil.css">
    <link rel="icon" href="../img/logo.png" type="image/x-icon">
</head>
    <body>
        <header>
            <div id="itens-cabecalho">
                <img src="../img/logo.png" width="80px" height="80px" id="primeira-foto">
                <h1><a href="dashboard.php">KALLTTO</a></h1>
                <ul>
                    <a href="usuario.php"><?php echo $_SESSION["nome"]; ?></a>
                    <a href="../Controller/logoutController.php">Logout</a>
                </ul>
            </div>
            </header>
            <section id = "menu">
                <div id="opcoes">
                    <h2>MENU</h2>
                    <ul>
                        <li><a href="#">Agrotoxicos</a></li>
                        <li><a href="#">Plantação</a></li>
                        <li><a href="#">Grão</a></li>
                        <li><a href="#">Relatórios</a></li>
                        <li><a href="#">Fazenda</a></li>
                        <li><a href="#">Funcionarios</a></li>
                        <?php
                        
                            if($_SESSION["cargo"]==1){
                                echo ' 
                                <li><a href="#">Usuários</a></li>
                                <li><a href="#">Relatório de Usuários</a></li>';
                            }        
                        ?>

                        <!-- Adicione mais itens conforme necessário -->
                    </ul>
                </div>
            </section>