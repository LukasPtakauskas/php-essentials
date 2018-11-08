<?php
//validation functions
  function has_presence($value){
    return (isset($value) && $value !== "");
  }

  function has_max_length($value,$max){
    return strlen($value)<=$max;
  }

  function has_inclusion_in($value , $set){
    return in_array($value,$set);
  }

  $errors = array();
  $username = trim("");

  if (!has_presence($username)){
    $errors['username']="Username can not be blank";
  }

?>
