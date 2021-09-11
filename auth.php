<?php
session_start();
function AuthSession(){
   if(empty($_SESSION["user"])){
      header("location: login.php");
   }
}

function logoutSession(){
   if(isset($_POST["session_destroy"]) && $_POST["session_destroy"] == "delete"){
      if(isset($_SESSION["user"])){
         session_destroy();
         session_abort();
      }

      header("Location: login.php");
   }else{
      header("Location: login.php");
   }
}

function getDataSession($name){
   $user = $_SESSION["user"];
   if(property_exists($user, $name)){
      return $user->$name;
   }else{
      return null;
   }
}