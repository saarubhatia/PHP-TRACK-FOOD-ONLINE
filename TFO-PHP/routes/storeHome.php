<?php
$page='storeHome';
session_start();
if(!isset($_SESSION['store']))
{
    include '../views/partials/storeHeader.php';
    include '../views/invalidAccess.php';
}
else
{
    include '../views/storeHome.php';
    echo "<script>alert('".$_SESSION['message'].$_SESSION['store_name']."'+'!');</script>";
}
?>