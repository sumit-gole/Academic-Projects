<?php
ob_start();
session_start();

define('db_host','localhost');
define('db_user','root');
define('db_pass','');
define('db_name','user');

$db = new PDO("mysql:host=".db_host.";dbname=".db_name, db_user, db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function __autoload($class) {
   
   $class = strtolower($class);

   
   $classpath = 'sa_core/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
   }  
   
   $classpath = '../sa_core/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
   }
   
   //if call from within admin adjust the path
   $classpath = '../../sa_core/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
   }     
    
}

$user = new User($db); 

include('functions.php');
?>