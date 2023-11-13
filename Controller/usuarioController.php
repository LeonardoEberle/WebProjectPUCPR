<?php
session_start();
include_once("../conn.php");


if(empty($_POST["nome"]) || empty($_POST["telefone"]) || empty($_POST["telefone"])){
    echo "<script>
        alert('campos vazios nao sao permitidos');
        location.href='../view/usuario.php';
        <script>";
}else{

    $id = $_SESSION['id'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    $sql = "update usuarios 
set usu_nome = '$nome',
usu_email = '$email',
usu_telefone = '$telefone'
where usu_id = $id";
//$update = $con->query($sql);

    if($update = $con->query($sql)){

        $_SESSION["nome"] = $_POST['nome'];
        $_SESSION["email"] = $_POST['email'];
        $_SESSION["telefone"] = $_POST['telefone'];

        echo"<script>
         alert('atualizado com sucesso');
         location.href='../view/usuario.php';
         </script>";
    }else{
        echo "<script>
        alert('nao foi possivel atualizar');
        location.href='../view/usuario.php';
        </script>";
    }

}

