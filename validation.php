<?php
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

    <?php
    $variable_validate="Shit";


    //Presence
    if (!isset($variable_validate)){
      echo "presence validation failed<br>";
    }
    else
    {
      echo "presence validated<br>";
    }

    //String length
    $min_length=3;
    $max_length=18;

    if (strlen($variable_validate)<$min_length || strlen($variable_validate)>$max_length )
    {
      echo "string length validation failed<br>";
    }
    else
    {
      echo "string length validated<br>";
    }
    //Type
    //if string =yes
    if (!is_string($variable_validate))
    {
      echo "Type validation failed<br>";
    }
    else {
      echo "Type validated<br>";
    }

    //Inclusion in a set
    // if not a bad word
    $set_bad_words = array("Shit", "Piss", "Fuck", "Cunt", "Cocksucker", "Motherfucker", "Tits");
    if (!in_array($variable_validate , $set_bad_words)){
      echo "Set validation failed<br>";
    }
    else {
      echo "Set validated<br>";
    }

    //Uniqueness
    //if not inlist - good
    $taken_words= array("word","toilet"); // and a bunch of others

    for ($i = 2 ; $i<100 ;$i++ ){
      $taken_words[]=generateRandomString(4);
    }

    function generateRandomString($length) {
    $characters = 'hitS';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
  }

    if (in_array($variable_validate,$taken_words)){
      echo "Uniqueness validation failed<br>";
    }
    else {
      echo "Uniqueness validated<br>";
    }
    //Format
    // use regex of a String
    // preg_match($regex , $subject)
    if (preg_match("/s f/","PHP is fun.")){
      echo "Format match was found";
    }else{
      echo "No match";
    }
    // okay, well the echo is not as user friendly.
    /* better stack them in array,
    then after  a form is filled and attempted to submit,
     then spew out all errors at once*/


    ?>

    <pre><?php echo print_r($taken_words);?></pre>

  </body>
</html>
