<?php
$page='home';

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
    include '../views/home.php';
    echo "<script>alert('".$_SESSION['message'].$_SESSION['first_name']."'+'!');</script>";
}
CloseCon($conn);
?>