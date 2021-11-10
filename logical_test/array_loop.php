<?php
$aplikasi[1] = 'gtAkademik';
$aplikasi[2] = 'gtFinansi';
$aplikasi[3] = 'gtPerizininan';
$aplikasi[4] = 'gtCampuz';
$aplikasi[5] = 'eOviz';

$count = count($aplikasi);
$x = 1;
while ($x <= $count) {
    echo  $aplikasi[$x] . "<br>";
    $x++;
}