<?php  session_start();
error_reporting(0);
setlocale(LC_ALL, 'nl_NL');
## database connection
try {
    $db = new PDO('mysql:host=localhost;dbname=faatbe_dev', 'faatbe_devuser', 'uUT@@99TyreN');   
} 
catch (PDOException $e) {
		die('URL:http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'].' <br />MESSAGE:'.$e->getMessage());
}

function __autoload($classname){
  include_once 'classes/'.$classname.'.class.php';
}

?>
