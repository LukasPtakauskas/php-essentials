<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>functions in php</title>
    <style>
    </style>
  </head>
  <body>
      <h2>from basic functions </h2>
    <?php
        $a =10 ;
        $b = 11;
        $c = 12;
        $d = 13;
        $e = 14;
        $f = 15;


        function say_hello(){
          echo "I'll say 'hello' later...<br>";
        }
        say_hello();
        //function with an argument
        function hello_to($string){
          echo "Hello {$string}!<br>";
        }
        hello_to("world");
        hello_to("buddy");
        hello_to($d);
        //reusability is important


        function greetings_hello( $greet,$ad,$id ){
          echo "{$greet} {$ad} {$id} <br>";
        }
         greetings_hello( "Welcome","dear","user02" );



         //returning values
        function nul_to_nein_with_ten_to_sweetbitter($ten,$levn,$tvelv,$theertin,$fortin,$fiftin ){
          $private_array[]=$fortin - $fortin;
          $private_array[]=$levn - $ten;
          $private_array[]=$tvelv - $ten;
          $private_array[]=$theertin - $ten;
          $private_array[]=$fortin - $ten;
          $private_array[]=$fiftin - $ten;
          $private_array[]=$levn+$ten -$fiftin;
          $private_array[]=$levn*2 -$fiftin;
          $private_array[]=$levn+$tvelv -$fiftin;
          $private_array[]=$tvelv*2 -$fiftin;
          // this is stupid , but helps with my retarded return statement
          return $private_array;
        }
        $nulandnein = nul_to_nein_with_ten_to_sweetbitter($a ,$b ,$c ,$d ,$e ,$f);
        //echo "fuck".$private_array;// a variable of function is not accessible outside it
    ?>
      <br><h1>to some fancier returns</h1>
      <pre>
        <?php print_r($nulandnein); ?>
      </pre>
      <br><br>
      <?php
      function zodiac_china_name($year){
        switch(($year-4)%12){
          case 0: return "Rat";
          case 1: return "Ox";
          case 2: return "Tiger";
          case 3: return "Rabbit";
          case 4: return "Dragon";
          case 5: return "Snake";
          case 6: return "Horse";
          case 7: return "Goat";
          case 8: return "Monkey";
          case 9: return "Rooster";
          case 10: return "Dog";
          case 11: return "Pig";
        }
     }
      $ascdfg = 2077;
      $ascdfg2 = zodiac_china_name($ascdfg);

      echo "{$ascdfg} is the year of the {$ascdfg2}<br>";

       ?>
      <h3> and the local and globals</h3>
      <?php
        $word="outside"; // global
        function foo(){
          global $word; // now it's the same
          if (isset($word)){
            echo "foo:".$word."<br>"; // it's just not setwhat the hell man.
          }
          $word="inside";//local scope, unless set otherwise
        }
        echo "1:".$word."<br>"; //outside
        foo();
        echo "2:".$word."<br><br>"; // outside if there isn't a global set in the foo

        // better practice

        $foo = "global";
        function localinator(){
          return "local";
        }
        $foo = localinator();
        echo "3:".$foo."<br>"; //outside


       ?>

       <h3> setting default function values</h3>


       <?php
       error_reporting(E_ALL);
       ini_set("display_errors", 1);
       include("./broken-script.php");

          function paint($color= "white"){
            return "The color is {$color}.<br>";
          }
          echo "unset ". paint("rouge")."<br>";//unsetThe color is rouge.
          echo paint(null)."<br>";//The color is .
          echo paint("rouge")."<br>";//The color is rouge.
          $afsdaaa +2;
        ?>











  </body>
</html>
