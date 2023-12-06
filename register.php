<html>
  <head>
    <title>Registration form</title>
  </head>
  <body style="background-color:orange; font-family:Jokerman;">
  <h1>Registration form</h1>
  <form method="POST" action=" dbconnect.php">
    <center>

  <label for="name"> Name:</label><br>
  <input type="text" id="name" name="name" ><br>
  <label for="email">Email ID:</label><br>
  <input type="text" id="email" name="email"><br><br>
  <label for="pass">Password:</label><br>
  <input type="text" id="pass" name="pass"><br><br>
  <label for="address">Address:</label><br>
  <input type="text" id="address" name="address"><br><br>
  <label for="phoneno">Phone Number:</label><br>
  <input type="text" id="phoneno" name="phoneno"><br><br>
  <input type="register" value="Register">
  <p style="text-align:center;">
   Already member?
   <a href=login.php>Just Login</a>
  </p>
  </center>
</form>
</body>
</html>