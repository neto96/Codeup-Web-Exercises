<?php
require_once 'functions.php';

function pageController() {
    $data = [];
    $data['currentValue'] = (inputHas('count')) ? inputGet('count') : 0;
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
<h1>Score: <?= escape($currentValue); ?></h1>
<p><a href="/pong.php?count=<?= escape($currentValue) + 1; ?>">HIT</a></p>
<p><a href="/pong.php?count=0">MISS</a></p>
</body>
</html>
