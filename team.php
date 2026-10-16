<?php
require __DIR__ . '/data.php';

$teamname = $_GET['name'] ?? '';

if (!isset($teams[$teamname])) {
    http_response_code(404);
    exit('Team not found.');
}

$details = $teams[$teamname];

require __DIR__ . '/header.php';
?>

<main class="team-page">

    <div class="team-info">

        <div class="team-info-left">
            <h1><?= htmlspecialchars($teamname) ?></h1>

            <img
                class="team-page-logo"
                src="<?= htmlspecialchars($details['logo']) ?>"
                alt="<?= htmlspecialchars($teamname) ?> logo"
            >
        </div>

        <div class="team-info-right">

            <h3>UEFA Ranking</h3>
            <p>
                <?= htmlspecialchars((string) ($details['uefa-coefficient-ranking'] ?? 'Not available')) ?>
            </p>

            <h3>Next opponent</h3>
            <p>
                <?= htmlspecialchars((string) ($details['next_opponent'] ?? 'Not announced')) ?>
            </p>

            <?php if (!empty($details['url'])): ?>
                <a
                    class="team-website"
                    href="<?= htmlspecialchars($details['url']) ?>"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    Official website
                </a>
            <?php endif; ?>

        </div>

    </div>

    <a class="back-link" href="index.php">
        Back to all teams
    </a>

</main>

<?php require __DIR__ . '/footer.php'; ?>