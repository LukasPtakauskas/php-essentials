<?php

header("HTTP/1.0 404 Not Found"); //sent here
header("X-Powered-By: none of your business"); //sent here
header("Date: Thu, 17 Oct 2018 11:20:12 GMT");

header('Location: http://www.vilisvonka.co.uk/');
//exit;


// We'll be outputting a PDF
header('Content-Type: application/pdf');

// It will be called downloaded.pdf
header('Content-Disposition: attachment; filename="downloaded.pdf"');

// The PDF source is in original.pdf
readfile('original.pdf');
?>
<!DOCTYPE html PUBLIC>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>shit</title>
    <style>
    </style>
  </head>
  <body>
  <pre>
    <?php
    #header("HTTP/1.1 404 Not Found"); header already sent
      print_r(headers_list());
    ?>
  </pre>

  </body>
</html>
