<?php
require '../Input.php';

function pageController()
{
    DEFINE('DB_HOST', '127.0.0.1');
    DEFINE('DB_NAME', 'parks_db');
    DEFINE('DB_USER', 'parks_user');
    DEFINE('DB_PASS', 'parks');
    require '../db_connect.php';


    $query = "SELECT name, location, date_established, area_in_acres FROM national_parks LIMIT 4";
    if (Input::has('page')) {
        if (Input::get('page') <= 1) {
            $query .= " OFFSET 0";
        } else {
            $query .= " OFFSET " . (Input::get('page') - 1) * 4;
        }
    }

    $parks = $dbc->query("$query")->fetchAll(PDO::FETCH_ASSOC);

    return [
        'parks' => $parks
    ];

}
extract(pageController());
?>


<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1">
    <tr>
        <th>Park Name</th>
        <th>Location</th>
        <th>Date Established</th>
        <th>Area (In Acres)</th>
    </tr>
<?php foreach ($parks as $park => $data) :?>
    <?= '<tr>'?>
    <?php foreach ($data as $column) :?>
        <?= '<td>' . $column . '</td>'?>
    <?php endforeach; ?>
    <?= '</tr>' ?>
<?php endforeach; ?>
</table>
</body>
</html>