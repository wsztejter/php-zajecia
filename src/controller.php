<?php

declare(strict_types=1);

namespace App;

include_once('./src/View.php');
require_once('./config/config.php');
require_once('./src/Database.php');

class Controller{
    const DEFAULT_ACTION = 'list';
    private array $getData;
private array $postData;
private static $configuration = [];

public function __construct(array $getData, array $postData)
{
    $this->getData = $getData;
    $this->postData = $postData;
    $db = new Database(self::$configuration);
}
public static function initConfiguration(array $configuration): void 
{
    self::$configuration = $configuration;

}
public function run(): void
{
    $action =$this->getData['action'] ?? self::DEFAULT_ACTION;
    $view = new View();

    $viewParams=[];
    switch ($action) {
        case 'create':
            $page = 'create';
            $created = false;
            if (!empty($_POST)) {
                $viewParams = [
                    'title' => $_POST['title'], 'description' => $_POST['description'],
                ];
                $created = true;
            }
            $viewParams['created'] = $created;
            break;
            default:
            $page = 'list';
            $viewParams['resultList']= 'Wyświetlamy listę notatek';
    }
    $view->render($page, $viewParams);
}
}
