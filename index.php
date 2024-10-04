<?php

require __DIR__ . "/data.php";

foreach ($teams as $team => $teamInfo): ?>
    <h3> <?= $team; ?> </h3>

<?php endforeach; ?>