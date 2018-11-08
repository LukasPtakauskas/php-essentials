<?php
    require_once("validation_functions.php");

    $errors = array();


    function redirect_to($url){
    header("Location: ".$url);
    exit; // don't load anything else
  }
  $username ="user";
  $password ="****";
  if(isset($_POST["submit"])){
    //the form was submitten
    $username =$_POST["username"];
    $password =$_POST["password"];

    if (($username== "paskauskas" && $password=="cypa2018")||($username== "lukas" && $password=="vetra2017")){
      // succesfull login
      $message= "velkam";
      recirect_to("main.php");

  else
  {
    $message= "Login";
  }
  ?>

<!DOCTYPE html PUBLIC>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>form submit</title>
    <link href="stylesheet.css" rel="stylesheet" rel="text/css">
    <style>
    </style>
  </head>
  <body>
    <?php
    echo $message;
    ?>
  <?php
    if (has_presence($errors)){
      echo $errors;
    }
    ?>
    <br>
    <form action="login.php" method="post">
      Username: <input type="text" name="username" value="" required/><br>
      Password: <input type="password" name="password" value="" required/><br>
      <br>
      <input type="submit" name="submit" value="submit"/>
    </form>

  </body>
</html>
