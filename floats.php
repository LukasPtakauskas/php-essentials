<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>floats</title>
  </head>
  <body>

    <?php
      echo $qtpi = 3.141 . "<br>";
      echo $ten =10 . "<br>";
      echo 4/3 . "<br>";
      echo "Legal>".$ten + 8 . "<br>";
      echo $ten. "<br>". "<br>";


      echo round($qtpi, 2 ). "<br>";
      echo round($qtpi, 1 ). "<br>";
      echo round($qtpi, 0 ). "<br>";
      echo floor($qtpi) . "<br>";
      echo ceil($qtpi) . "<br>";


      echo "is {$ten} integer? ". is_int($ten) . "<br>";
      echo "is {$qtpi} integer? ". is_integer($qtpi) . "<br>". "<br>";

      echo "is {$ten} float??? ". is_float($ten) . "<br>";
      echo "is {$qtpi}  float?? ". is_float($qtpi) . "<br>". "<br>";

      echo "is {$ten} numeric? ".  is_numeric($ten) . "<br>";
      echo "is {$qtpi} numeric? ". is_numeric($qtpi) . "<br>". "<br>";


      echo "{$qtpi} is  of type :". gettype($qtpi)."<br>";
      echo "{$ten} is  of type :". gettype($ten)."<br>". "<br>". "<br>";


      $data = array(1, 1., NULL, new stdClass, 'foo');
      //foreach loops are always usefull
      foreach ($data as $value) {
        echo gettype($value), "<br>";
      }
    ?>
    


  </body>
</html>
