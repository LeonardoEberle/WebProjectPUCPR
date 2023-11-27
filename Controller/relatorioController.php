<?php

include_once("../conn.php");

$id = $_GET["id"];

$sql = "delete from relatorio where rel_id = $id";

if($delete = $con->query($sql)){
    echo "<script>alert('relatorio deletado com sucesso!');
        location.href='../view/relatorios.php';    
        </script>";
}else{
    echo "nao deu";
}