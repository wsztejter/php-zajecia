<?php 
declare(strict_types=1);

namespace App;
include_once ('./src/utils/debug.php');
include_once('./src/view.php');

const DEFAULT_ACTION = 'list';

$action = $_GET['action']?? DEFAULT_ACTION;

$viewParams = [];

if ($action ==='create') {
    $viewParams['resultCreate'] = 'Tworzymy nową notatkę';
} else {
    $viewParams['resultList'] = 'Wyświetlamy listę notatek';
}



$view = new View();
$view->render($action, $viewParams);