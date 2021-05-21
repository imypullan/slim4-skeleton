<?php
namespace App\Factories;
use App\Controllers\EditTaskController;
use Psr\Container\ContainerInterface;
/**
 * Class EditTaskControllerFactory
 * @package App\Factories
 * @return EditTaskController
 */
class EditTaskControllerFactory
{
    /**
     * @param ContainerInterface $container
     * @return EditTaskController
     */
    public function __invoke(ContainerInterface $container): EditTaskController
    {
        $model = $container->get('TasksModel');
        return new EditTaskController($model);
    }
}