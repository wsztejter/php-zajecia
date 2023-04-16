<?php 
declare(strict_types=1);

namespace App;
include_once ('./src/utils/debug.php');
include_once('./src/Controller.php');
require_once('./config/config.php');

controller::initConfiguration($configuration);
$controller = new Controller($_GET, $_POST);
$controller->run();