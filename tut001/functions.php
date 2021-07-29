<?php

// fucntion to sanitize string

function clean_input($string){
  if (!empty($string)) {
    $string = trim($string);
  $string = filter_var($string,FILTER_SANITIZE_STRING);
    $string = htmlspecialchars($string);
    return $string;
  }else{
    return "";
  }
}

 ?>
