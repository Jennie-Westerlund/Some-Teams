<?php

require __DIR__ . "/data.php"
?>

<?php foreach ($teams as $team => $teamInfo): ?>
    <h3> <?= $team; ?> </h3>
    <ul>
        <?php foreach ($teamInfo as $key => $value): ?>
            <?php if ($key === 'logo'): ?>
                <?php continue; ?>
            <?php endif; ?>
            <li> <?= $value; ?> </li>
        <?php endforeach; ?>
    </ul>
<?php endforeach; ?>