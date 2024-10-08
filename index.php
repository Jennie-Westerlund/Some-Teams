<?php require __DIR__ . "/header.php"; ?>

<section id="teams" class="grid-container">
    <div class="grid">
        <?php foreach ($teams as $team => $teamInfo): ?>
            <div class="team-cards">
                <img src="<?= $teamInfo['logo'] ?>" alt="logotype" width="120px">
                <h4> <a class="links" href="<?= $teamInfo['url'] ?>"> <?= $team; ?> </a></h4>
                <ul>
                    <?php foreach ($teamInfo as $key => $value): ?>
                        <?php if ($key === 'logo'): ?>
                            <?php continue; ?>
                        <?php endif; ?>
                        <li> <?= ucwords($key) . ": " . $value; ?> </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endforeach; ?>

    </div>
</section>


<?php require __DIR__ . "/footer.php"; ?>