<?php $render('header'); ?>

<h2>Edit user</h2>

<form action="<?=$base;?>/user/<?=$user['id'];?>/edit" method="post">
    <label>
        Name:<br>
        <input type="text" name="name" value="<?=$user['name'];?>"/>
    </label><br><br>

    <label for="">
        E-mail:<br>
        <input type="email" name="email" value="<?=$user['email'];?>"/>
    </label><br><br>

    <input type="submit" value="Edit">
</form>

<?php $render('footer'); ?>