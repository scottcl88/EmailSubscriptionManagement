<h2><?= esc($title) ?></h2>

<?php if (! empty($emails) && is_array($emails)): ?>

    <?php foreach ($emails as $emails_item): ?>

        <h3><?= esc($emails_item['email']) ?></h3>


    <?php endforeach ?>

<?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>