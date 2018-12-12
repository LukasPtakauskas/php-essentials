<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>LOCALE HOSTESS</title>
    <link href="stylesheet.css" rel="stylesheet" rel="text/css">
    <style>
    /*coders nice*/
    .coders_exodia{
      display: flex;
      flex-direction: row;
      flex-wrap: wrap-reverse;
    }
    #coders_part{
      display: inline-block;
      background-color: #222222;
      color:#eee;
      padding: 10px 10px 10px 10px ;
      margin: 15px 15px 15px 15px ;
      border-radius: 15px;
    }
    </style>
  </head>
  <body>



  <div class="coders_exodia">
    <pre id="coders_part">
        INCLUDE
        <?php
        print_r(get_included_files());
        ?>
      </pre>
      <pre id="coders_part">
        GET
        <?php
        print_r($_GET);
        ?>
      </pre>
      <pre id="coders_part">
        POST
        <?php
        print_r($_POST);
        ?>
      </pre>
      <pre id="coders_part">
        COOKIE
        <?php
        print_r($_COOKIE);
        ?>
      </pre>
    </div>
  </body>
</html>
