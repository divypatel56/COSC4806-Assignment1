<?php

  $valid_usernamr = "admin";
  $valid_password = "password";

  $username = $_REQUEST["username"];
  $password = $_REQUEST["password"];

  if ($username==$valid_usernamr && $password==$valid_password){
    echo "Login Successful";
  }
  else{
    echo "Login Failed";
  }

  
?>