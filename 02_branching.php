<?php
$role = $_GET['role'] ?? 'guest';
$day  = $_GET['day']  ?? 'Mon';
$code = (int)($_GET['code'] ?? 200);

if($role==='admin'){
  echo "Welcome, admin\n";
}elseif($role==='editor'){
  echo "Welcome, editor\n";
}else{
  echo "Welcome, user\n";
}

switch($day){
  case'Sat':
  case'Sun':
    echo "Enjoy your weekend!\n";
    break;
  default:
    echo "Back to work.\n";
}

if(function_exists('match')){
  $message=match($code){
    200,201=>'OKish',
    400=>'Bad Request',
    401,403=>'Not Authorized',
    404=>'Not Found',
    default=>'Unknown',
  };
  echo "$code => $message\n";
}else{
  switch($code){
    case 200:case 201:echo"OKish\n";break;
    case 400:echo"Bad Request\n";break;
    case 401:case 403:echo"Not Authorized\n";break;
    case 404:echo"Not Found\n";break;
    default:echo"Unknown\n";
  }
}
