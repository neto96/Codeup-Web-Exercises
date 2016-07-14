<?php

function pageController() {
    $data = [];
    $data['things'] = ['Pizza', 'Sleep', 'Videogames', 'Futbol', 'Traveling'];
    return $data;
}

extract(pageController());

?>
<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-color: skyblue;
        }

        li {
            background-color: lightgrey;
        }
    </style>
    <title>My Favorite Things</title>
</head>
<body>
<p>Some of my favorite things are:</p>
<ol>
    <?php foreach ($things as $thing) { ?>
    <li><?= $thing; ?></li>
    <?php } ?>
</ol>
</body>
</html>
