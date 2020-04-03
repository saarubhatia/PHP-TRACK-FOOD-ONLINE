<?php
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
    $row = unserialize(urldecode($_GET['food_item']));
    // "INSERT INTO cart SELECT * FROM `".strtolower($_GET['restaurant'])."` WHERE 'name'='".$row['name']."')" ;
    mysqli_query($conn,"INSERT INTO cart(name,image,description,cost) VALUES ('".$row['name']."','".$row['image']."','".$row['description']."','".$row['cost']."')");
    header('Location:showRestaurant.php?restaurant='.$_GET['restaurant']);
}
CloseCon($conn);
?>