<?php
session_start();

if(isset($_SESSION["user"])){

   header("Location: welcome.php");

}else if(isset($_POST["username"]) && isset($_POST["password"])){
   $username = $_POST["username"];
   $password = $_POST["password"];

   $dataUser = (object) [
      "username" => $username,
      "password" => $password,
      "name" => "Heibert",
      "age" => 24,
      "rol" => "Admin",
   ];

   if($username == "user1" && $password == "12345"){
      $_SESSION["user"] = $dataUser;
      header("Location: welcome.php");
   }else{
      header("Location: login.php?status=false");
   }
}else{
   require_once "form.php";
}
