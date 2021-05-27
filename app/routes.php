<?php
declare(strict_types=1);

use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/', 'HomePageController');
    $app->post('/addTask', 'AddTaskController');
    $app->get('/done', 'DonePageController');
    $app->get('/markDone', 'MarkAsCompletedController');
    $app->get('/delete', 'DeleteTaskController');
    $app->get('/edit', 'EditPageController');
    $app->post('/editTask', 'EditTaskController');

};
