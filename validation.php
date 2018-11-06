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
    $error_message ="";

    //Presence
    if (!isset($variable_validate)){
      //echo "presence validation failed<br>";
      $error_message .= "presence validation failed<br>";
    }
    else
    {
      //echo "presence validated<br>";
      $error_message .= "presence validated<br>";
    }

    //String length
    $min_length=3;
    $max_length=18;

    if (strlen($variable_validate)<$min_length || strlen($variable_validate)>$max_length )
    {
      $error_message .= "string length validation failed<br>";
      //echo "string length validation failed<br>";

    }
    else
    {
      $error_message .= "string length validated<br>";
      //echo "string length validated<br>";

    }
    //Type
    //if string =yes
    if (!is_string($variable_validate))
    {
      $error_message .= "Type validation failed<br>";
      //echo "Type validation failed<br>";

    }
    else {
      $error_message .= "Type validated<br>";
      //echo "Type validated<br>";

    }

    //Inclusion in a set
    // if not a bad word
    $set_bad_words = array("Shit", "Piss", "Fuck", "Cunt", "Cocksucker", "Motherfucker", "Tits");
    if (!in_array($variable_validate , $set_bad_words)){
      $error_message .= "Set validation failed<br>";
      //echo "Set validation failed<br>";

    }
    else {
      $error_message .= "Set validated<br>";
      //echo "Set validated<br>";

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
      $error_message .= "Uniqueness validation failed<br>";
      //echo "Uniqueness validation failed<br>";
    }
    else {
      //echo "Uniqueness validated<br>";
      $error_message .= "Uniqueness validated<br>";
    }
    //Format
    // use regex of a String
    // preg_match($regex , $subject)
    if (preg_match("/s f/","PHP is fun.")){
      $error_message .= "Format match was found";
      //echo "Format match was found";
    }else{
      //echo "No match";
      $error_message .= "No match";
    }
    // okay, well the //echo is not as user friendly.
    /* better stack them in array,
    then after  a form is filled and attempted to submit,
     then spew out all errors at once*/
     echo $error_message;

    ?>

    <pre><?php //echo print_r($taken_words);?></pre>

  </body>
</html>
