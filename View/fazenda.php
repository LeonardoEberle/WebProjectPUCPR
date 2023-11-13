<?php
include_once("menu/topMenu.php");
?>

<div id="informacoes">

<a href="../controller/plantacao.php">incluir nova</a><br>

<?php
$id = $_SESSION["id"];
$sql = "select * from plantacao where plt_responsavel = $id";
$plt = $con->query($sql);
if($plt->num_rows < 1){
    exit("voce nao possui nenhuma fazenda cadastrada");
}
?>

<table border="1px">

<tr>
    <th>Nome</th>
</tr>

<?php foreach($plt as $row): ?>
    <tr>
        <td><?= $row['plt_nome']; ?></td>
    </tr>
<?php endforeach; ?>
</table>

</div>
