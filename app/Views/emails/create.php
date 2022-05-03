<?= session()->getFlashdata('error') ?>
<?= service('validation')->listErrors() ?>

<form action="/emails/create" method="post">
    <?= csrf_field() ?>

    <label for="email">Email</label>
    <input type="email" name="email" /><br />

    <input type="submit" name="submit" value="Create email" />
</form>