<?php
include_once("../conn.php");

session_start();

if(empty($_POST["usuario"]) || empty($_POST["senha"])){
    print"
        <script> alert('campo vazio!');
        location.href='../login.php';
        </script>";
}else{
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
}

if(isset($usuario, $senha)){
    $sql1 = "select * from usuarios
        where usu_login = '$usuario'
        and usu_senha = '$senha'";
    $resultado = $con->query($sql1);
}else{
    print"<script>
        alert('houve um erro ao logar');
        location.href='../index.php'
        </script>";
}

//print_r($resultado);

$row = $resultado->fetch_object();
$qtd = $resultado->num_rows;

// print_r($row->usu_id);
// print_r($qtd);

if($qtd>0){
    $_SESSION["usuario"] = $usuario;
    $_SESSION["id"] = $row->usu_id; 
    $_SESSION["nome"] = $row->usu_nome;
    $_SESSION["email"] = $row->usu_email;
    $_SESSION["cargo"] = $row->usu_cargo;
    
    print"<script>location.href='../view/dashboard.php'</script>";
}else{
    session_destroy();
    print"<script>
    alert('usuario invalido');
    location.href='../login.php';
    </script>";
}