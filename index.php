<?php
session_start();

//Check if user is not authenticated, then redirect to login page
if(!isset($_SESSION['authenticated'])){
  header("Location: ./login.php");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>index</title>
  </head>
  
  <body>
    <h1>Assignment-1</h1>
    
    <p>Welcome, <?= $_SESSION [ "username" ] ?> </p>
  </body>

  <footer> <a href="./logout.php">Click here to Logout</a> </footer>
</html>