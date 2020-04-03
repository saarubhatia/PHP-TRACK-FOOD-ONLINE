<?php
$page='orders';
include '../db_connection.php';
$conn=OpenCon();

session_start();
if(!isset($_SESSION['user']))
{
    include '../views/partials/header.php';
    include '../views/invalidAccess.php';
}
else
{
    include '../views/orders.php';
}
CloseCon($conn);
?>