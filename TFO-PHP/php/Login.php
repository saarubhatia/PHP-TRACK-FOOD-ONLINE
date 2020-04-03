<?php

include 'db_connection.php';
$conn=OpenCon();

session_start();

if(isset($_POST['log-btn']) && isset($_POST['username_login']) && isset($_POST['password_login']))
{
    $username_login=$_POST['username_login'];
    $userpass_login=$_POST['password_login'];

    $sql="SELECT username,userpass,first_name FROM registered_users WHERE username = '$username_login' AND userpass='$userpass_login'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==1)
    {
        $row=mysqli_fetch_assoc($result);

        $_SESSION['user']=$_POST['username_login'];
        $_SESSION['message']= "Welcome back ";
        $_SESSION['first_name']=$row["first_name"];
        
        header('Location:Home.php');
    }
    else
    {
        echo "<script>alert('Invalaid Credentials. Please try again');</script>";
    }
}
else if(isset($_POST['reg-btn']) && isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['username']) && isset($_POST['password']))
{
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
        $username=$_POST['username'];
        $userpass=$_POST['password'];
        mysqli_query($conn,"INSERT INTO registered_users(first_name,last_name,username,userpass) VALUES ('$first_name','$last_name','$username','$userpass')");

        $_SESSION['user']=$_POST['username'];
        $_SESSION['message']= "Welcome to Track Food Online, ";
        $_SESSION['first_name']=$first_name;

        header('Location:Home.php');
}
else if(isset($_POST['store-log-btn']) && isset($_POST['store_username']) && isset($_POST['store_password']))
{
    $store_username=$_POST['store_username'];
    $store_userpass=$_POST['store_password'];

    $sql="SELECT store_username,store_userpass,store_name FROM registered_stores WHERE store_username = '$store_username' AND store_userpass='$store_userpass'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==1)
    {
        $row=mysqli_fetch_assoc($result);

        $_SESSION['store']=$_POST['store_username'];
        $_SESSION['message']= "Welcome ";
        $_SESSION['store_name']=$row["store_name"];
        
        header('Location:StoreHome.php');
    }
    else
    {
        echo "<script>alert('Invalaid Credentials. Please try again');</script>";
    }
}

if(isset($_GET['user_registered'])||isset($_GET['store_registered']))
{
        include 'LoginHtml.php';
}
else
{
$_GET['user_registered']='yes';
$_GET['store_registered']='no';
include 'LoginHtml.php';
}
//include 'LoginTry.php';

CloseCon($conn);
?>