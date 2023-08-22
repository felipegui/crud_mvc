<?php $render('header'); ?>

<h2>Add new user</h2>

<form action="<?=$base;?>/create" method="post">
    <label>
        Name:<br>
        <input type="text" name="name"/>
    </label><br><br>

    <label for="">
        E-mail:<br>
        <input type="email" name="email"/>
    </label><br><br>

    <input type="submit" value="Register">
</form>

<?php $render('footer'); ?>