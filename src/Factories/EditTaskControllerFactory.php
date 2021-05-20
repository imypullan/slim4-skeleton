<?php
namespace App\Factories;
use App\Controllers\EditTaskController;
use Psr\Container\ContainerInterface;
class EditTaskControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $model = $container->get('EditTaskController');
        return new EditTaskController($model);
    }
}