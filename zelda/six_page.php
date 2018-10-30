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
      $page="William Shakerston";
      $quote="Fight fire with fire";
      $link1="/bio/".rawurlencode($page)."?quote=".urlencode($quote)."<br>"; // this works better
      $link2="/bio/".urlencode($page)."?quote=".rawurlencode($quote);


      echo $link1."<br>";
      echo $link2."<br>";








    ?>

  </body>
</html>
