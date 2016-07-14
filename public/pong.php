<?php

function pageController() {
    $data = [];
    $data['currentValue'] = (isset($_GET['count'])) ? $_GET['count'] : 0;
    return $data;
}

extract(pageController());

?>

<!doctype html>
<html>
<head>
    <title>PONG</title>
</head>
<body>
<h1>Score: <?= $currentValue; ?></h1>
<p><a href="/ping.php?count=<?= $currentValue + 1; ?>">HIT</a></p>
<p><a href="/ping.php?count=0">MISS</a></p>
</body>
</html>
