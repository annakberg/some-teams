<?php

require __DIR__ . '/data.php';
require __DIR__ . '/header.php';

?>

<main>

<div class="logos">

<?php
foreach ($teams as $teamname => $details ): ?>
    <a href="team.php?name=<?= urldecode($teamname) ?>">
                <div class="logo">
                <img
                src="<?php echo $details['logo']; ?>" 
                alt="team logo">
                <h3><?php echo $teamname; ?></h3>
            </div>   
            </a>
        <?php endforeach; ?>
</main>

<?= require __DIR__ . '/footer.php'; ?>

