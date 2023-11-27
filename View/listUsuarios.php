<?php

include_once("menu/topMenu.php");
$sql = "select * from usuarios";
$user = $con->query($sql);
?>


<div id=informacoes>

<table border="1px">

<tr>
       
    <th>Nome</th>
    <th>email</th>
    <th>telefone</th>

</tr>
<?php foreach($user as $row): ?>
    <tr>
        <td><?= $row['usu_nome']; ?></td>
        <td><?= $row['usu_email']; ?></td>
        <td><?= $row['usu_telefone']; ?></td>

    </tr>
<?php endforeach; ?>
</table>

</div>