<?php
  session_start();// creates a $_COOKIE["PHPSESSID"] => random string
  // found on stackoverflow
  function getRealIpAddr()
  {
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
  }

  //cookie is limited to 4k characters
  $name = "cookieValue";
  $value = "140";
  $value .= "%";
  $expire = time() + (60*60*24) ; // time() give now in UNIX, then I add seconds to it! 60*60*24 - one day worth of seconds
  setcookie($name,$value, $expire);



  $name = "IP";
  $value = getRealIpAddr();
  $expire = time() + (60*30);

  setcookie($name,$value, $expire);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>cookies&session</title>
  <link href="stylesheet.css" rel="stylesheet" rel="text/css">
  <style>
  </style>
</head>
<body>
  <h1 style="text-align:center;">
  cookies and session
  </h1>

<?php 
$test = isset($_COOKIE["IP"]) ? $_COOKIE["IP"] : "";
echo $test."<br> ";
// and now the unseting;
//setcookie($_COOKIE["IP"]); //sets this $_COOKIE["IP"] to null, but kinda unclear
//setcookie($_COOKIE["IP"], null); //sets this $_COOKIE["IP"] to null, but still is saved as cookie
setcookie($_COOKIE["IP"], null , (time() - 60 ));// setting negative expire date removes it. BAM! good thinking
$test = isset($_COOKIE["IP"]) ? $_COOKIE["IP"] : "";
echo $test."<br>";
// setcookie should still be done in the header
?>




<!--
SESSION!
-->
<?php
  $_SESSION["first name"]="Lempa";
  $name = $_SESSION["first name"];
  echo $name;
  //it is happening faster, no need to refresh to get this value
 ?>












  <div class="coders_exodia">
    <pre id="coders_part">
        Included
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
