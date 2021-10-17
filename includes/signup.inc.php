<?php

//include
include "../classes/DBhandler.class.php";
include "../classes/User.class.php";
include "../classes/UserController.class.php";

if(isset($_POST["submit"])){

  //grab data
  $userName = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $repeatPassword = $_POST["rpt-password"];

  
  //instantiate UserController class
  $newUser = new UserController($userName,$email,$password,$repeatPassword);
  $newUser->signupUser();
  //return to signup page page;
  header("location:../signup.php?error=none");
}