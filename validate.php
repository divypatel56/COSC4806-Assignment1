<?php
session_start();

  //Declare username and password variables
  $valid_usernamr = "Divy";
  $valid_password = "password";

  $username = $_REQUEST['username'];
  $_SESSION['username'] = $username;
  $password = $_REQUEST['password'];

  //if user is valid send them to the index page
  if ($username==$valid_usernamr && $password==$valid_password){
    $_SESSION['authenticated'] = 1;
    header("Location: ./index.php");
  }

  else{
    //if user is not valid, declare Sesion variable failed 
    //attempts and if already exists then increment it by 1.
    if(!isset($_SESSION["failed attempts"])){
      $_SESSION["failed attempts"] = 1;
    }
    else{
      $_SESSION["failed attempts"] = 
      $_SESSION["failed attempts"] + 1;
    }
    //redirection to login page.
    header( "Location: ./login.php" );
  }
  
?>