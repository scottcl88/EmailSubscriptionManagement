<?= session()->getFlashdata('error') ?>
<?= service('validation')->listErrors() ?>

<form action="/emails/edit/<?= esc($email["email_id"]) ?>" method="post">
    <?= csrf_field() ?>
    <input type="hidden" name="email_id" class="hidden" value="<?= esc($email["email_id"]) ?>" /><br />
    <label for="email">Email</label>
    <input type="email" name="email" value="<?= esc($email["email"]) ?>" /><br />

    <input type="submit" name="submit" value="Update email" />
</form>