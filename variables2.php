<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>variables</title>
  </head>
  <body>

    <?php
    $number1=10;
    echo $number1 . "<br>";
    $number1++;//das
    echo '$number1++ <br>';
    echo $number1 . "<br>";
    echo $notNumber ;

    $greet = "hello";
    $tab = "world";
    $full_fraze = $greet . " " . $tab;
    echo $full_fraze;
    ?>
    <br>hmmm..<br>
    <?php
    $fraze = $full_fraze;
    //ways to output strings
    echo "$fraze again<br>";
    echo '$fraze again<br>';
    echo "{$fraze} again<br>"; // this is he best way, looks nice.



    ?>
  </body>
</html>
