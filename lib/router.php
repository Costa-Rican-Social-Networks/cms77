<?php

function zzrouter(){
  if (isset($_GET['controller']) && !empty($controller)){
    $controller = $_GET['controller'];
    if (isset($_GET['action']) && !empty($action)){
      $action = $_GET['action'];
    }
    else{
      $action = $GLOBALS['app.config']['action_default'];
    }
  }
  else {
    $controller = $GLOBALS['app.config']['controller_default'];
    $action = $GLOBALS['app.config']['action_default'];
  }

  zzlog('Current path is: /'.$controller.'/'.$action);

  return array(
    'controller'  => $controller,
    'action'      => $action,
  );


}
