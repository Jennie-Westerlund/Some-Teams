<?php

require __DIR__ . "/data.php";
require __DIR__ . "/header.php";
?>

<?php foreach ($teams as $team => $teamInfo): ?>
    <img src="<?= $teamInfo['logo'] ?>" alt="logotype" width="120px">
    <h4> <?= $team; ?> </h4>
    <ul>
        <?php foreach ($teamInfo as $key => $value): ?>
            <?php if ($key === 'logo'): ?>
                <?php continue; ?>
            <?php endif; ?>
            <li> <?= "$key: " . $value; ?> </li>
        <?php endforeach; ?>
    </ul>
<?php endforeach; ?>




<?php require __DIR__ . "/footer.php"; ?>