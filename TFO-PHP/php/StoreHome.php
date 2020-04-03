<?php
$page='StoreHome';
session_start();
if(!isset($_SESSION['store']))
{
    include 'StoreHeader.php';
    include '../views/InvalidAccess.html';
}
else
{
    include 'StoreHeader.php';
    include '../views/StoreHome.html';
    echo "<script>alert('".$_SESSION['message'].$_SESSION['store_name']."'+'!');</script>";
}
?>