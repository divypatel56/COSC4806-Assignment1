<?php
session_start();

//if user is not authenticated, then redirect to login page.
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
    
    <p>Welcome, <?= $_SESSION [ "username" ] 
      //display the current date (formatted in a readable way)
      . ". Today is: " . date("Y-m-d") . "."
      
      ?> </p>
    
  </body>

  <footer> <a href="./logout.php">Click here to Logout</a> </footer>
</html>