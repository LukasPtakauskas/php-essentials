<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>control circuits</title>
    <style>
    </style>
  </head>
  <body>

    <?php
      // if statement
      $new_user = true;
      if ($new_user){
        echo "<h1>Welcome!</h1>";
        echo "<p> We are glad you decided to join us!</p>";
      }else{
          echo "<h1>Welcome back!</h1>";
          echo "<p>come on in and check out what's new</p>";
      }

      // elseif and else
      $a =1;
      $b =10;
      if ($a > $b)
      {
        echo "a is bigger than b<br>";
      }
      elseif ($b > $a)
      {
        echo "a isn't bigger than b<br>";
      }
      else
      {
          echo "a and b are equal<br>";
      }


      // ternary operator
      $myBool = true;
      print ($myBool ? 'Does not get printed<br>' : 'Does<br>');


      //operators
      if (($a >$b)|| !($new_user)){
        echo "a big or old user";
      }else{
        echo "a smol or nuser";
      }
      $e=12;
      if(!isset($e)){
        $e =200;
      }
      echo "<br>e=".$e."<br>";

      // if input empty, please fill
      $quantity = 10;
      if (empty($quantity) && !is_numeric($quantity)){
        echo "enter a numerical quantity please<br>";
      }
      // switch statement
       switch ($a) {
        case 1:
          echo "a = one <br>";
          break;
        case 0:
          echo "a = zero <br>";
          break;
        case 2:
          echo "a = two <br>";
          break;
        case 3:
          echo "a = three <br>";
          break;
        default:
          echo "a is big number<br>";
          break;
      }
      $year = 2013;
      switch(($year-4)%12){
        case 0: $zodiac = "Rat"; break;
        case 1: $zodiac = "Ox"; break;
        case 2: $zodiac = "Tiger"; break;
        case 3: $zodiac = "Rabbit"; break;
        case 4: $zodiac = "Dragon"; break;
        case 5: $zodiac = "Snake"; break;
        case 6: $zodiac = "Horse"; break;
        case 7: $zodiac = "Goat"; break;
        case 8: $zodiac = "Monkey"; break;
        case 9: $zodiac = "Rooster"; break;
        case 10: $zodiac = "Dog"; break;
        case 11: $zodiac = "Pig"; break;
      }
      echo "{$year} is the year of the {$zodiac}<br>";
      /*
      two cases can give same output, use this
      case 'case1':
      case 'case2':
      same output; break;

      */


      // while loops
      $i = 0;
      while ($i < 5) {
          echo $i++;
      } // Prints "01234"
      $i = 0;
      do {
          echo $i++;
      } while ($i < 5); // Prints "01234"

      // for loops

      for ($x = 0; $x < 10; $x++) {
          echo $x;
      } // Prints "0123456789"



      // foreach
      $wheels = ['bicycle' => 2, 'car' => 4];

      // Foreach loops can iterate over arrays
      foreach ($wheels as $wheel_count) {
          echo $wheel_count;
      } // Prints "24"
      echo "<br>";

      //when using an assoc_array
      foreach ($wheels as $vehicle => $wheel_count) {
          echo "A $vehicle has $wheel_count wheels <br>";
      }
      echo "<br>";
      //continue + break
      for ($i = 0; $i < 1000; $i++) {
          if ($i === 4) {
              continue; // Skip this iteration of the loop
          }
          echo $i.", ";
          if ($i == 69){break;}
        } // Prints "0, 1, 2, 3, 5, 6, 7, 8, 9, 10"


      for ($i = 0; $i < 10; $i++) {

        if ($i % 2 == 0 ){ continue; } // also skip this iteration of nonsense
        for($t=0; $t<10; $t ++){
            if ($t===3){continue (2);} //skip the outer for loop too

            for ($yy = 0; $yy <100;$yy++){
              echo $i . "-".$t."-".$yy."<br>";
              if ($yy * $i * $t > 10){ break;}
            }
        }
      }

     ?>


  </body>
</html>
