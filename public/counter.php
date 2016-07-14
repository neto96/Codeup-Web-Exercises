<?php



function pageController() {
    $data = [];
    if (isset($_GET['count'])) {
        $data['currentValue'] = $_GET['count'];
    } else{
        $data['currentValue'] = 0;
    }
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