<?php
include_once("menu/topMenu.php");
$sql="select * from relatorio as rel
LEFT JOIN usuarios as usu
ON rel.rel_autor = usu.usu_id";
$rel = $con->query($sql);

?>

<div id="informacoes">

<table border="1px">
<tr>
       
    <th>Nome</th>
    <th>descricao</th>
    <th>data</th>
    <th>autor</th>
    <th>acao</th>



</tr>
<?php foreach($rel as $row): ?>
    <tr>
        <td><?= $row['rel_nome']; ?></td>
        <td><?= $row['rel_descricao']; ?></td>
        <td><?= $row['rel_data']; ?></td>
        <td><?= $row['usu_nome']; ?></td>
        <td><a href="../Controller/relatorioController.php?id=<?=$row['rel_id'];?>">delete</a></td>


    </tr>
<?php endforeach; ?>
</table>


</div>