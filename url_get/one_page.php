<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>First Page</title>
    <style>
    </style>
  </head>
  <body>

      <h1>1st page</h1>
    <?php
      $link_name="go to the other page";
      $id=$_GET;
      if (isset($id)){
        $id=$_GET['id']+1;
        if ($id%7==0){$id+=1000;}
        elseif($id%6==0){$id+=100;}
        elseif($id%5==0){$id+=10;}

      }else{
        $id = 100000000;
      }
      $dizaster = "!&@$%*()+=:;?[]#/"; // al the reserved characters
      /*
      [dizaster] => !
      [@$%*()_] => :;?[]
      */
    ?>
    <a href="two_page.php?
    id=<?php echo $id; ?>
    &dizaster=<?php echo rawurlencode($dizaster);?>">
      <?php echo $link_name; ?>
    </a><br>
    <a href="six_page.php?id=<?php echo $id; ?>">Shake</a>


    <br><br>
    <pre>
      <?php
       print_r($_GET);
        ?>
    </pre>

  </body>
</html>
