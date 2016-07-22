<?php
require_once '../Input.php';

function pageController() {
    $data = [];
    $data['currentValue'] = (Input::has('count')) ? Input::get('count') : 0;
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
