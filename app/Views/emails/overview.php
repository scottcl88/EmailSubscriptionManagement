<div class="container">
    <h2>Email List</h2>
    <a href="emails/create" class="btn btn-primary">Create</a>
    <?php if (!empty($emails) && is_array($emails)) : ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Email</th>
                    <th scope="col">Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($emails as $emails_item) : ?>
                    <tr>
                        <td><?= esc($emails_item['email_id']) ?></td>
                        <td><?= esc($emails_item['email']) ?></td>
                        <td><a href="emails/edit/<?= esc($emails_item['email_id']) ?>">Edit</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    <?php else : ?>
        <h3>No Emails</h3>
        <p>Unable to find any emails.</p>
    <?php endif ?>

</div>