<?php
session_start();

  $valid_usernamr = "Divy";
  $valid_password = "password";

  $username = $_REQUEST['username'];
  $_SESSION['username'] = $username;
  $password = $_REQUEST['password'];

  if ($username==$valid_usernamr && $password==$valid_password){
    $_SESSION['authenticated'] = 1;
    header("Location: ./index.php");
  }
  else{
    if(!isset($_SESSION["failed attempts"])){
      $_SESSION["failed attempts"] = 1;
    }
    else{
      $_SESSION["failed attempts"] = 
      $_SESSION["failed attempts"] + 1;
    }

    header( "Location: ./login.php" );
   
    
  }
  

  
?>