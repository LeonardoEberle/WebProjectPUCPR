<?php
include_once("../conn.php");

//session_start();

if(empty($_POST["usuario"]) || empty($_POST["senha"])){
    print"
    <script> alert('campo vazio!');
    location.href='../login.php';
    </script>";
}

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

//echo"$usuario e $senha";
//$sql = "select * from usuarios";

$sql1 = "select * from usuarios
where usu_login = '$usuario'
and usu_senha = '$senha'";

$resultado = $con->query($sql1) or die($con->error);

print_r($resultado);