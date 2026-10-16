<?php

require __DIR__ . '/data.php';
require __DIR__ . '/header.php';

?>

<main>

<div class="logos">

<?php

//loopar lag i teams

foreach ($teams as $teamname => $details ): ?>
    <a href="team.php?name=<?= urldecode($teamname) ?>">
                <div class="logo">
                <img
                src="<?php echo $details['logo']; ?>" 
                alt="team logo">
                <!--skapades för att lagnamn va för långa-->
                <h3 class="<?= in_array($teamname, ['Eintracht Frankfurt', 'Czarni Sosnowiec']) ? 'long-team-name' : '' ?>">  <?= htmlspecialchars($teamname) ?> </h3>
            </div>   
            </a>
        <?php endforeach; ?>
</main>

<?= require __DIR__ . '/footer.php'; ?>

