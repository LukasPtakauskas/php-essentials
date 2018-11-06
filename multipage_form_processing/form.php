<?php
//anything to preload?
?>
<!DOCTYPE html PUBLIC>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>form submit</title>
    <link href="stylesheet.css" rel="stylesheet" rel="text/css">
    <style>
    </style>
  </head>
  <body>
    <form action="form_processing.php" method="post">
      Username: <input type="text" name="username" value="" required/><br>
      Password: <input type="password" name="password" value="" required/><br>
      <br>
      <input type="submit" name="submit" value="submit"/>
    </form>
  </body>
</html>
