<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>urlencode</title>
    <style>
    </style>
  </head>
  <body>

    <?php
      $page="W.Shakerston";
      $quote="Fight fire with fire";
      $link1="/bio/".rawurlencode($page)."?quote=".urlencode($quote); // this works better
      $link2="/bio/".urlencode($page)."?quote=".rawurlencode($quote);

      echo $page."<br>".$quote."<br>";
      echo $link1." <---------- this is the better thing!<br>";
      echo $link2."<br>";








    ?>

  </body>
</html>
