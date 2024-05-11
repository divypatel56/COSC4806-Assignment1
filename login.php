<?php
session_start();
//If user  logged in and attempt to go to login.php, redirect them to the index.php
if(isset($_SESSION['authenticated'])){
  header("Location: ./index.php");
}
//if it is a failed attempt, then show the error message with the number of failed attempts.
if(isset($_SESSION["failed attempts"])){
  
  echo "<p style='color:red'>This is unsuccessful attempt 
  number: " .$_SESSION["failed attempts"];
}
?>
  
<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
  </head>

  <body>
    <h1>Login Form</h1>
    
    <form action="/validate.php" method="post">
      <label for="username">Username:</label>
      <br>
      <input type="text" id="username" name="username">
      <br>
      <label for="password">Password:</label>
      <br>
      <input type="password" id="password" name="password">
      <br><br>
      <input type="submit" value="Submit">
    </form>

  </body>
</html>