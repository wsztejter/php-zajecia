<?php 
declare(strict_types=1);

namespace App;
include_once ('./src/utils/debug.php');
include_once('./src/view.php');
$action =$GET['action']?? null;

$view = new View();
$view->render($action);