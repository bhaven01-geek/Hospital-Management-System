<?php
session_start();

$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="logininfo";

$conn=mysqli_connect($db_host,$db_user,$db_password,$db_name);
if(!$conn)
{
    die("Connection failed: ".mysqli_connect_error());
}
$user=$_POST['user'];
$pass=$_POST['pass'];

$que="select * from admins where Username='$user'&&Password='$pass' ";
$result=mysqli_query($conn,$que);
$num=mysqli_num_rows($result);
if($num==1)
{
    $_SESSION['username']=$user;
    header('location:DashB.php');
}
else{
    header('location:Login.html');
}
?>