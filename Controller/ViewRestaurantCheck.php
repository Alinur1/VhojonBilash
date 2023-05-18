<?php
require_once '../Model/model.php';
session_start();
$fileErr = "";
$restaurant = "";

$AllRestaurant = showRestaurant();

foreach($AllRestaurant as $res)
{
    $restaurant = $res['restaurant'];
    $fileErr = "";
    break;
}
?>