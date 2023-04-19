<?php 
declare(strict_types=1);

namespace App;

require_once('./exception/appException.php');
include_once('./src/controller.php');
include_once ('./src/utils/debug.php');
require_once('./config/config.php');

try{
controller::initConfiguration($configuration);
$controller = new Controller($_GET, $_POST);
$controller->run();}
catch(AppException $e){
echo "<h1>Wystąpił błąd w aplikacji</h1>";
echo '<h3>' .$e->getMessage() . '</h3>';
}