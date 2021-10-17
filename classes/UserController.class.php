<?php

include "./DBhandler.class.php";
include "./User.class.php";

class UserController extends User{

  private $repeatPassword;

  public function __construct($userName,$email,$password,$repeatPassword){
    
    parent::__construct($userName,$email,$password);
    $this->repeatPassword = $repeatPassword;
  }

  public function signupUser(){
    if($this->isEmptyInput()==true){
      header("location:../signup.php?error=emptyInput");
      exit();
    }

    if($this->isValidUserName()==false){
      header("location: ../signup.php?error=userName");
      exit();
    }

    if($this->isValidEmail()==false){
      header("location:../signup.php?error=invalidEmail");
      exit();
    }

    if($this->isPasswordMismatch()==true){
      header("location:../signup.php?error=passwordMismatch");      
      exit();
    }

    if($this->isUserExists()==true){
      header("location:../signup.php?error=userExists");
      exit();
    }

    $this->signup();

  }

  private function isEmptyInput(){
    if(empty($this->userName) or empty($this->email) or empty($this->password) or empty($this->repeatPassword)){
      return true;
    }
    else{
        return false;
    }
  }

  private function isValidUserName(){
    if(!preg_match("/^[a-zA-Z0-9]*$/",$this->userName)){
      return false;
    }
    else{
      return true;
    }
  }

  private function isValidEmail(){
    if(!filter_var($this->email,FILTER_VALIDATE_EMAIL)){
      return false;
    }
    else{
      return true;
    }
  }

  private function isPasswordMismatch(){
    if($this->repeatPassword != $this->password){
      return true;
    }
    else{
      return false;
    }
  }

  private function isUserExists(){
    if($this->userExists()){
      return true;
    }
    else{
      return false;
    }
  }
}