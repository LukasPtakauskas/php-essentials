<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>debugging how to</title>
    <style>
    </style>
  </head>
  <body>

    <?php
      $number=9;
      $my_string="Bug?";
      $array = array (1 => "Homepage", 2 => "About",3=>"other stuff");
      echo "number ";
      var_dump($number);
      echo "<br>my_string ";
      var_dump($my_string);
      echo "<br>array";
      var_dump($array);




    ?>
    <br>
    this is the print_r(get_defined_vars()) function
    <pre>
      <?php
        print_r(get_defined_vars());
        ?>
     </pre>
     using<br>
     function hello_to($string){<br>
       echo "Hello {$string}!";<br>
      <b> var_dump(debug_backtrace());</b><br>
     }<br>
     <br>
     <pre>
     <?php
     function hello_to($string){
       echo "Hello {$string}!<br>";
       var_dump(debug_backtrace());
     }
     hello_to("world");
      ?></pre><br>
      also <a href="http://xdebug.org">xdebug<a/><br>
      also <a href="http://www.php-debugger.com/dbg/">DBG<a/><br>
      also <a href="http://www.firephp.org">FirePHP<a/><br>


  </body>
</html>
