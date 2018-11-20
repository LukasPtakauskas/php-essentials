<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>index</title>
    <style>
    </style>
  </head>
  <body>
    click these links to go down the rabbit hole.<br>
    <a href="one_page.php">1</a><br>
    <a href="two_page.php">2</a>

      <h3>html encoding</h3>

        <p> stuff like &lt; can break html, so encode that shit pls</p>

    <?php
    $link_text="<Click> & learn more";
    ?>
    <a href="">
      <?php echo htmlspecialchars($link_text); ?>
    </a><br>
    <?php
    $entities="►ᵊײÄ◄<br>™£©¿";
    echo htmlentities($entities);
    ?>
    <?php // what to use when
      $url_page="php/created/page/url.php";
      $param1 = "this is a string with <>";
      $param2 = "&#?*$[]+ are bad characters";
      $link_text2 = "<Click> & learn more";

      $url = "http://localhost/";
      $url .= rawurlencode($url_page);
      $url .= "?"."param1=".urlencode($param1);
      $url .= "+"."param2=".urlencode($param2);
      echo $param1.$param2;

      ?>

      <a href="<?php echo htmlspecialchars($url); ?>">
        <?php echo htmlspecialchars($link_text2); ?>
      </a>

      <pre>
        <?php
        print_r($url);
         ?>
      </pre>

  </body>
</html>
