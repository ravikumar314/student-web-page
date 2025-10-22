<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATTENDANCE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<img class="bg" src="bg.jpg" alt="NIT CALICUT" srcset="">
<p align="left" style="color:red; font-size:40px;"> <a href="index.php">HOME</a> </p>
<p align="right" style="color:red; font-size:40px;"> For STUDENT <a href="student.php">click here</a> </p>

<p style="color:red; font-size:40px;" align="center"> For FACULTY </p>

<form action="signup.php" method="GET">
        <th > SIGN UP</th><br><br>
  Name<br> <input type="text" name="Name" value="" > <br><br>
  Phone Number<br><input type="integer" name="Phone" value=""> <br><br>
  Email ID <br><input type="email" name="Email" value=""> <br><br>
  PASSWORD <br><input type="password" name="Password" value=""> <br><br>
  <button class="btn">SIGN UP</button>
  </form>
  <br>
  <br>

  <form action="login.php" method="POST">
    <th> SIGN IN</th><br><br>
  Email ID<br><input type="email" name="Email" value=""> <br><br>
  PASSWORD<br><input type="password" name="Password" value=""> <br><br>
  <button class="btn">SIGN IN</button>

    </form>

</body>
</html>