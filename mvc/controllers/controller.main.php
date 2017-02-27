function controller (){
  $path = uuget_path() | 'index';
  switch ($path){
    case 'index':
    default:
      $output = file_get_contents('../views/tpl.home.index');
      echo $output;
    break;
  }
}
