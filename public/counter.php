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
    <title>Up/Down Counter</title>
</head>
<body>
<h1><?= $currentValue ?></h1>
<p><a href="/counter.php?count=<?= $currentValue + 1; ?>">Up</a></p>
<p><a href="/counter.php?count=<?= $currentValue - 1; ?>">Down</a></p>
</body>
</html>