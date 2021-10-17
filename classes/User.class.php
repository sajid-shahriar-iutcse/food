<?php

include "./DBhandler.class.php";
class User extends DBhandler{

  protected $userId;
  protected $userName;
  protected $email;
  protected $password;
  protected $isValidUser;
  protected $isLoggedIn;

  public function __construct($userName,$email,$password){
    $this->userName = $userName;
    $this->email= $email;
    $this->password=$password;

    $this->isValidUser = false;
    $this->isLoggedIn= false;
  }

  protected function signup(){
    

    $statement = $this->connect()->prepare("insert into tbl_user(user_name,user_password,email) values(?,?,?);");

    $hasedPassword = password_hash($this->password,PASSWORD_DEFAULT);

    if(!statement.execute(array($this->userName,$hasedPassword,$this->email))){
      $statement = null;
      header("location../signup.php?error=statementfailed");
      exit();
    }
    
    $this->isValidUser = true;
    $this->isLoggedIn = true;
    
    $statement = null;

    
  }

  protected function userExists(){
    $statement = $this->connect()->prepare('select user_id from tbl_user where user_name = ? or user_email=?;');

    if(!$statement->execute(array($this->userName,$this->email))){
      $statement = null;
      header("location:../signup.php?error=statementfailed");
      exit();
    }
    
    if($statement->rowCount()>0){
      return true;
    }
    else{
      return false;
    }

  }

}