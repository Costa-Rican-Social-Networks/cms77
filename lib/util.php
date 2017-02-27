<?php

function zzt($var, $tokens = NULL, $values = NULL){
  if (is_array($tokens) && is_array($tokens)){
    $var = str_replace($tokens, $values, $var);
  }
  echo $var;
  return;
}

function zzlog($message = ''){
  if ($message != ''){
    $GLOBALS['app_log'][] = $message;
    return;
  }
}

function zzshow_log(){
  echo '<pre>'.print_r($GLOBALS['app_log'], true).'</pre>';
}
