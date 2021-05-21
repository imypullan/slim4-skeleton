<?php
namespace App\Factories;
use App\Controllers\AddTaskController;
use Psr\Container\ContainerInterface;
/**
 * Class AddTaskControllerFactory
 * @package App\Factories
 * @return AddTaskController
 */
class AddTaskControllerFactory {
    public function __invoke(ContainerInterface $container): AddTaskController
    {
        $model = $container->get('TasksModel');
        return new AddTaskController($model);
    }
}