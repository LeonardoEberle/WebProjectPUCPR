<?php


session_start();
include_once("../conn.php");

$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$nasc = $_POST['nascimento'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$cargo = $_POST['cargo'];
$estado = $_POST['estado'];

$sql = "insert into usuarios 
(usu_nome, usu_sexo, usu_nascimento, usu_telefone, usu_email, usu_login, usu_senha, usu_cargo, usu_estado)
values ('$nome','$sexo','$nasc','$telefone','$email','$login','$senha','$cargo','$estado')";

if($cad = $con->query($sql)){
    echo"<script>alert(cadastrado com sucesso);
        location.href='../view/login.php';
    </script>";
}else{
    echo "nao foi possivel cadastrar";
}
