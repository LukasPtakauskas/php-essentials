<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>arrays, associative arrays and array functions</title>
    <style>
      .arraywrap {
        background-color: #ddd;
        margin-top: 5px;

        border-radius: 5px;
        padding:20px;
        width: 500px;

      }


    </style>
  </head>
  <body>

    <?php
    $stats = array(15 , 13 ,12 ,11, 10  );
    ?>
    <div class="arraywrap">
      a nice way to show the array
      <pre>
        <?php
          echo print_r($stats);
          ?>
      </pre>

    </div>

    <?php
    //changing a value
    $stats[2] =8 ;
    //adding a value to the end of the array
    $stats[]=9;
    //should also add to the end
    $stats[count($stats)]=10;
    $stats[7] = 7;

    ?>

    <div class="arraywrap">made changes to the array
      <pre>
        <?php
          echo print_r($stats);
          ?>
      </pre>
    </div>
    associative array

    <?php
    $named = array ( "Strenght"=> 15, "Dexterity"=> 12,"Constitution"=> 13, "Intelligence"=> 8, "Wisdom"=> 11, "Charisma"=> 10 )
    ?>

    <div class="arraywrap">associative array
      <pre>
        <?php
          echo print_r($named);
          ?>
      </pre>
    </div>

    Array functions <a href="http://php.net/manual/en/ref.array.php"> more of them </a>
    <div class="arraywrap">used sort on stats
      <pre>
        <?php sort($stats);echo print_r($stats);?>
      </pre>
    </div>

    <div class="arraywrap">used rsort on stats
      <pre>
        <?php rsort($stats); echo print_r($stats);?>
      </pre>
    </div>

    <?php
      echo "stats min: ". min($stats)."<br>";
      echo "stats max: ". max($stats)."<br>";
      echo "stats count: ". count($stats)."<br>";
     ?>

     <br><br>
     Implosion and explosion
     <br>
     <?php
     $stats_string = implode(" , ", $stats);
     echo "implosion with ' , ' :".$stats_string."<br>";
     //echo "it is ". gettype($stats_string)."<br>";

      ?>

      <div class="arraywrap">explosion
        <pre>
          <?php print_r(explode(" , ",$stats_string));

          ?>

        </pre>
      </div>

      <div class="arraywrap">
      looking for stuff in the array<br>
     <?php echo "is 15 in stats? ".in_array(15,$stats)."<br>";
     $ciklo_kintamasis=0;
     while($ciklo_kintamasis<30){
       if ($ciklo_kintamasis==15){
         $ciklo_kintamasis++;
       }
       echo "{$ciklo_kintamasis} is in array?".in_array($ciklo_kintamasis,$stats)."<br>";
      $ciklo_kintamasis++;
     }
     echo false;// echoes nothing
      ?>
    </div>


      POINTERS

      <div class="arraywrap">pointers and stuff
        <pre>
          <?php
            echo "0: ".current($stats)."<br>";
            next($stats);
            echo "1: ".current($stats)."<br>";
            next($stats);
            next($stats);
            echo "3: ".current($stats)."<br>";
            prev($stats);
            echo "2: ".current($stats)."<br>";
            reset($stats);
            echo "0 again: ".current($stats)."<br>";
            end($stats);
            echo "last: ".current($stats)."<br>";
            next($stats);
            echo "last+1: ".current($stats)."<br>";



            next($stats);

          ?>

        </pre>
      </div>


      <div class="arraywrap">stupid while but smart like foreach
        <pre>
          <?php echo print_r($stats);?>
        </pre>
        <?php
        //stops when at the ond of array
        reset($stats);
          while($numeric_value = current($stats)){

            echo $numeric_value.", ";
            next($stats);
          }
          echo "<br>sup<br>";


        ?>
      </div>











  </body>
</html>
