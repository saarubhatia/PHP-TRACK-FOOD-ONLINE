<?php
$page='Home';
session_start();
if(!isset($_SESSION['user']))
{
    include 'Header.php';
    include '../views/InvalidAccess.html';
}
else
{
    include 'Header.php';
    include '../views/Home.html';
    echo "<script>alert('".$_SESSION['message'].$_SESSION['first_name']."'+'!');</script>";
}
?>