<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>type juggling and type casting</title>
    <style>
    </style>
  </head>
  <body>
      Type Juggling <br>
      <?php $count ="2 cats"; ?>
      Type:<?php echo gettype($count); ?><br>

      <?php $count +=3; ?>
      Type:<?php echo gettype($count); echo $count; ?><br>

      <?php $cats ="I have ". $count." cats."; ?>
      cats:<?php echo gettype($cats); echo $cats; ?><br>
      <br>

      Type Casting<br>
      <?php settype($count , "int"); ?>
      count:<?php echo gettype($count); ?><br>

      <?php $count2 = (string) $count; ?>
      count:<?php echo gettype($count); ?><br>
      count2:<?php echo gettype($count2); ?><br>
      <br>
      <?php  $test1=3; ?>
      <?php  $test2=3; ?>
      test1:<?php echo gettype($test1); ?><br>
      test2:<?php echo gettype($test2); ?><br>converting<br>
      <?php  settype($test1, "string"); ?>
      <?php (string) $test2; // this doesn't set type ?>
      test1:<?php echo gettype($test1); ?><br>
      test2:<?php echo gettype($test2); ?><br>


  </body>
</html>
