<?php
include("connection.php");
error_reporting(0);
session_start();
$email=$_POST['Email'];
$pas=$_POST['Password'];
if($email=="" || $pas=="")
{
    echo "login failed";
    header("refresh: 1; url=index.php");
}
 
$query="SELECT * FROM TEACHER WHERE email='$email' && password='$pas' ";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total)
{
    header('location:teacher.php');
   
}
else
{
    echo "login failed";
    header("refresh: 1; url=index.php");
}
?>