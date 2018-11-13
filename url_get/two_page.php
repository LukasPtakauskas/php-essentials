<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Second page</title>
    <style>
    </style>
  </head>
  <body>

    <h1>2nd page</h1>
    <?php
      $link_name="go to the other page";
      if (isset($_GET['id'])){
        $id =$_GET['id']+1;
        if ($id%7==0){$id+=1000;}
        elseif($id%6==0){$id+=100;}
        elseif($id%5==0){$id+=10;}

      }else{
        $id = 100000000;
      }
      $company="Johnies & Lucky";
      // the "&" causes php to set $company=Johnies and also creates var $Lucky = empty
      // gotta use urlencode on it
    ?>

    <a href="one_page.php?
    id=<?php  echo $id; ?>
    &company=<?php echo rawurlencode($company); ?>">
      <?php echo $link_name; ?>
    </a><br>
    <a href="six_page.php?id=<?php echo $id; ?>">Shake</a>

    <br><br>
    <pre>
      <?php
      echo "this is how the company name looks like encoded ".
      rawurlencode($company).
      "  // space becomes '+' and '&'becomes %26 <br>";
      print_r($_GET); ?>
    </pre>

  </body>
</html>
