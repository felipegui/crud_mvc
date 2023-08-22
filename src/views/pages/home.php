<?php $render('header'); ?>

<a href="<?=$base;?>/create">New user</a><br><br>

<table border="1" width="50%">
    <tr>
        <th>Identifier</th>
        <th>Name</th>
        <th>E-mail</th>
        <th>Options</th>
    </tr>
    <?php foreach($users as $user): ?>
        <tr>
            <td><?=$user['id'];?></td>
            <td><?=$user['name'];?></td>
            <td><?=$user['email'];?></td>
            <td>
                <a href="<?=$base;?>/user/<?=$user['id'];?>/edit">
                    <img width="20" src="<?=$base;?>/assets/images/document.png" alt="">
                </a>
                <a href="<?=$base;?>/user/<?=$user['id'];?>/delete" onclick="return confirm('Are you sure you want to delete?')">
                    <img width="20" src="<?=$base;?>/assets/images/trash.png" alt="">
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php $render('footer'); ?>