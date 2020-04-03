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
    if(isset($_POST['tot-btn']))
    {
        $token_id=rand(101005,101105);
        $date=date("d-m-Y h:i:sa");
        $del_type = $_POST["delivery-type"];
        if(isset($_POST['dc']))
        {
            $pay_method="Debit Card";
        }
        else if(isset($_POST['cc']))
        {
            $pay_method="Credit Card";
        }
        else
        {
            $pay_method="Cash On Delivery";
        }
        $status="Collect at Counter Time ".date("h:i:sa+5");
        mysqli_query($conn,"INSERT INTO orders(token_id,date,del_type,pay_method,status) VALUES ('$token_id','$date','$del_type','Cash On Delivery','Delivered')");
    }
    header('Location:orders.php');
}
CloseCon($conn);
?>