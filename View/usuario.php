<?php
include_once("menu/topMenu.php");
?>
<style>
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

form {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
    height: 400px;
    margin-left: 40%;
    
}

h2 {
    color: #3498db;
}

label {
    display: block;
    margin: 10px 0;
    font-weight: bold;
}

input {
    width: 100%;
    padding: 8px;
    margin: 5px 0 15px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    background-color: #3498db;
    color: #fff;
    cursor: pointer;
    font-size: 16px;
}

input[type="submit"]:hover {
    background-color: #2181b5;
}
</style>
<div id="informacoes">

<form action="../Controller/UsuarioController.php" method="post">
        <h2>Perfil de <?php echo $_SESSION['nome'] ?></h2>

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo $_SESSION['nome']?>"><br>

        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" value="<?php echo $_SESSION['telefone']?>"><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $_SESSION['email']?>"><br>


        <input type="submit" value="salvar">
    </form>

</div>
