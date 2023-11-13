<?php
include_once("menu/topMenu.php");
?>

<div id="informacoes">

<?php
$sql = "select * from agrotoxicos";
$toxic = $con->query($sql);
?>

<table border="1px">

<tr>
       
    <th>Nome</th>
    <th>Categoria</th>
</tr>
<?php foreach($toxic as $row): ?>
    <tr>
        <td><?= $row['atx_nome']; ?></td>
        <td><?= $row['atx_categoria']; ?></td>
    </tr>
<?php endforeach; ?>
</table>

</div>
