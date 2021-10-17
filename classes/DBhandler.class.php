<?php

include "../config/config.php";

class DBhandler{
  protected function connect(){
    try{
      
    }
    catch(PDOException $e){
      print "Error!: " . $e->getMessage() . "</br>";
      die();
    } 
  }
}