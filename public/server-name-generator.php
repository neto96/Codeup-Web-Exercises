<?php
function pageController() {
    $data = [];
    $nouns = ['potato','dishwasher','table','chair','rocket','window','cup','light bulb','house','backpack'];
    $adjective = ['Fantastic','Marvelous','Wonderful','Terrible','Horrible','Underwhelming','Pitiful','Sad','Confused','Tactical'];
    $data['servername'] = randomElement($adjective) . " " . randomElement($nouns) . ".";
    return $data;
}
function randomElement($array) {
    return $array[rand(0,9)];
}

extract(pageController());

?>
<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-color: #761c19;
        }
        h1 {
            text-align: center;
            margin-top:100px;
            color: aliceblue;
        }
    </style>
    <title>Server Name Generator</title>
</head>
<body>
<h1>Your randomly generated server name is:</h1>
<h1><?= $servername; ?></h1>
</body>
</html>