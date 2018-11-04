
 <?php
  // page redirection
  function redirect_to($url){
   header("Location: ".$url);
   exit; // don't load anything else
  }
  $logged_in = $_GET['logged_in'];
    if($logged_in){
      redirect_to("http://www.9gag.com");
    }else{
      echo "lgin";
    }
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
