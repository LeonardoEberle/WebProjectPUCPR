<?php
include_once("menu/topMenu.php");
?>

<div id="informacoes">

<?php
$sql = "select * from grao";
$grao = $con->query($sql);
?>

<table border="1px">

<tr>
       
    <th>Nome</th>
    <th>tipo</th>
</tr>
<?php foreach($grao as $row): ?>
    <tr>
        <td><?= $row['gra_nome']; ?></td>
        <td><?= $row['gra_tipo']; ?></td>
    </tr>
<?php endforeach; ?>
</table>

</div>
