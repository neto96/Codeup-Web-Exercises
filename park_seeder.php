<?php

require 'db_connect.php';

$query = "TRUNCATE national_parks";
$dbc->exec($query);

$parks = [
    ['name' => 'Acadia', 'location' => 'Maine', 'date_established' => '1919/02/26', 'area_in_acres' => 47389.67],
    ['name' => 'Arches', 'location' => 'Utah', 'date_established' => '1988/10/31', 'area_in_acres' => 9000.00],
    ['name' => 'Big Bend', 'location' => 'Texas', 'date_established' => '1944/06/12', 'area_in_acres' => 801163.21],
    ['name' => 'Crater Lake', 'location' => 'Oregon', 'date_established' => '1902/05/22', 'area_in_acres' => 183224.05],
    ['name' => 'Denali', 'location' => 'Alaska', 'date_established' => '1917/02/26', 'area_in_acres' => 4740911.72],
    ['name' => 'Dry Tortugas', 'location' => 'Florida', 'date_established' => '1992/10/26', 'area_in_acres' => 64701.22],
    ['name' => 'Kings Canyon', 'location' => 'California', 'date_established' => '1940/03/04', 'area_in_acres' => 461901.20],
    ['name' => 'Mammoth Cave', 'location' => 'Kentucky', 'date_established' => '1941/07/01', 'area_in_acres' => 52830.19],
    ['name' => 'Olympic', 'location' => 'Washington', 'date_established' => '1938/06/29', 'area_in_acres' => 922650.86],
    ['name' => 'Shenandoah', 'location' => 'Virginia', 'date_established' => '1926/05/22', 'area_in_acres' => 199045.23]
];

foreach ($parks as $park) {
    $query = "INSERT INTO national_parks (name, location, date_established, area_in_acres) VALUES ('{$park['name']}', '{$park['location']}', '{$park['date_established']}', '{$park['area_in_acres']}')";
    $dbc->exec($query);
}
