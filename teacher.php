<?php
include("connection.php");
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance record</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<img class="bg" src="bg.jpg" alt="NIT CALICUT" srcset="">

<form action="insert.php" method="GET">
        <th> Attendance record</th><br><br>
  Roll No. <br><input type="int" name="roll" value=""> <br>
  Date<br><input type="date" name="date" value=""> <br>
  <input type="radio" id="present" name="mark" value="present">
  <label for="present">Present</label> <br>
  <input type="radio" id="absent" name="mark" value="absent">
  <label for="absent">Absent</label> <br>
  <button class="btn">Mark Attendance</button>

  </form>
<br>
  <p align="right" style="color:red; font-size:40px;"> <a href="index.php">LOGOUT</a> </p>
</body>
</html>