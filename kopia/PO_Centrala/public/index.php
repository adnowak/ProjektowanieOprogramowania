<?php 
define("SRC", __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR ."src" . DIRECTORY_SEPARATOR);
define("APP", SRC ."app" . DIRECTORY_SEPARATOR);
define("TEMPLATES", SRC . "templates" . DIRECTORY_SEPARATOR);
define("CONFIG", SRC . "config" . DIRECTORY_SEPARATOR);
define("VIEWS", SRC . "views" . DIRECTORY_SEPARATOR);
$config = json_decode(file_get_contents(CONFIG . "config.json"), true);  

require_once APP . "Router.php";
require_once APP . "Http" . DIRECTORY_SEPARATOR . "Request.php";

if($config["errors"]) {
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
} else {
  error_reporting(0);
}


$url = $_SERVER["REQUEST_URI"];
$params = explode("/", $url);

$request = new Request(
  $_GET,
  $_POST,
  array(),
  $_COOKIE,
  $_FILES,
  $_SERVER
);
  
new Router($params, $request);



