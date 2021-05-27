<?php
namespace App\Factories;
use App\Controllers\DeleteTaskController;
use Psr\Container\ContainerInterface;
/**
 * Class DeleteTaskControllerFactory
 * @package App\Factories
 * @return DeleteTaskController
 */
class DeleteTaskControllerFactory {
    /**
     * @param ContainerInterface $container
     * @return DeleteTaskController
     */
    public function __invoke(ContainerInterface $container): DeleteTaskController
    {
        $model = $container->get('TasksModel');
        return new DeleteTaskController($model);
    }
}