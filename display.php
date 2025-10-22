<?php
include("connection.php");
session_start();
error_reporting(0);
$roll=$_GET['roll'];
if(roll=="")
{
echo "failed";
header("refresh: 1; url=index.php");
}
$query="SELECT * FROM STUDENT WHERE roll='$roll'";
$data = mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

if($total!=0)
{
    ?>
    <style>
    table,th,td{
        border:1px solid black;
        padding: 5px;
    }
    table{
        border-spacing: 15px;
    }
    </Style>
<table style="width:100%" >
    <tr>
       <th> DATE</th>
       <th> ATTENDANCE</th>
    </tr>


    <?php

while($result=mysqli_fetch_assoc($data))
{
    echo "<tr>
            <th>".$result['date']."</th>
            <th>".$result['mark']."</th>
        </tr>";
}



}
else{
    echo "NO RECORD FOUND";
}
?>
<p align="left" style="color:red; font-size:40px;"> <a href="index.php">HOME</a> </p>
<p align="right" style="color:red; font-size:40px;"> <a href="student.php">BACK</a> </p>

</table>

