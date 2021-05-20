<?php
namespace App\Factories;
use App\Controllers\MarkAsCompletedController;
use Psr\Container\ContainerInterface;
class MarkAsCompletedControllerFactory {
    public function __invoke(ContainerInterface $container): TasksModel
    {
        $model = $container->get('MarkAsCompletedController');
        return new MarkAsCompletedController($model);
    }
}