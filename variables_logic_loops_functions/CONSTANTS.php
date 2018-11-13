<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>constants</title>
    <style>
    </style>
  </head>
  <body>

    <?php
      $max_width = 980; // this is a variable

      define("MAX_WIDTH", 980); // defining a constant
      echo MAX_WIDTH;
      //MAX_WIDTH +=1;
      //echo MAX_WIDTH;

      define("MAX_WIDTH", 981); // does not redefine the constant
      echo MAX_WIDTH;


     ?>


  </body>
</html>
