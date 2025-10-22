<?php
include("connection.php");
session_start();
error_reporting(0);
$roll=$_GET['roll'];
$date=$_GET['date'];
$mark=$_GET['mark'];
if($roll!="" && $date!="" && $mark!="")
{
$query="INSERT INTO STUDENT VALUES ('$roll','$date','$mark')";

$data=mysqli_query($conn,$query);
if($data)
{
    echo "successful";
    header("refresh: 1; url=teacher.php");
}
else{
    echo "failed";
    header("refresh: 1; url=teacher.php");
}
}
else{
    echo "failed";
    header("refresh: 1; url=teacher.php");
}

?>