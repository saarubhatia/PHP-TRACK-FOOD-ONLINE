<?php
$page='showRestaurant';
$restaurant=$_GET['restaurant'];

include '../db_connection.php';
$conn=OpenCon();

session_start();
if(!isset($_SESSION['user']))
{
    include '../views/header.php';
    include '../views/invalidAccess.php';
}
else
{
    include '../views/showRestaurant.php';
}
CloseCon($conn);
?>