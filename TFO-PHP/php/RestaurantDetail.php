<?php
session_start();
if(!isset($_SESSION['user']))
{
    $page='RestaurantDetail';
    include 'Header.php';
    include '../views/InvalidAccess.html';
}
else
{
    $page='RestaurantDetail';
    include 'Header.php';
    include '../views/RestaurantDetail.html';
}
?>