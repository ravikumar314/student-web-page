<?php
include("connection.php");
error_reporting(0);
session_start();
$name=$_GET['Name'];
$phone=$_GET['Phone'];
$email=$_GET['Email'];
$pas=$_GET['Password'];
if($name!="" && $phone!="" && $email!=" " && $pas!="")
{
$query="INSERT INTO TEACHER VALUES ('$name','$phone','$email','$pas')";

$data=mysqli_query($conn,$query);
if($data)
{
    echo "sign up successful";
    header("refresh: 1; url=index.php");
}
else{
    echo "sign up failed";
    header("refresh: 1; url=index.php");
}
}
else{
    echo "ERROR";
    echo "fill all the details";
    header("refresh: 1; url=index.php");
}

?>