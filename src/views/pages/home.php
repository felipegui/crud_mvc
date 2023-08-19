<?php $render('header'); ?>

<a href="<?=$base;?>/create">New user</a><br><br>

<table border="1" width="50%">
    <tr>
        <th>Identificador</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Opções</th>
    </tr>
    <?php foreach($users as $user): ?>
        <tr>
            <td><?=$user['id'];?></td>
            <td><?=$user['name'];?></td>
            <td><?=$user['email'];?></td>
            <td>
                <a href="">[Editar]</a>
                <a href="">[Deletar]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php $render('footer'); ?>