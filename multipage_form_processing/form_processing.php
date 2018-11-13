<?php
//anything to preload?
?>
<!DOCTYPE html PUBLIC>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>form process</title>
    <link href="stylesheet.css" rel="stylesheet" rel="text/css">
    <style>
    </style>
  </head>
  <body>

    <pre>
      <?php
       print_r($_POST);
        ?>
    </pre>

    <?php
      if(isset($_POST["submit"])){
      if(isset($_POST["username"])){
        $username = $_POST["username"];
      }else {$username ="default";}
        if(isset($_POST["username"])){
          $password = $_POST["password"];
        }else{$password="default";}
        echo "{$username}:{$password} <br>";

        //doing some ternary operator stuff
        // boolean_test ? true_value : false_value;

        $username = isset($_POST["username"]) ? $_POST["username"] :"404";
        $password = isset($_POST["password"]) ? $_POST["password"] :"password";


        echo "{$username}:{$password}";
      }else{
        echo "not submitten";
      }
      ?>
  </body>
</html>
