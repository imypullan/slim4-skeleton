<?php
namespace App\Factories;
use Psr\Container\ContainerInterface;
use App\Models\TasksModel;
/**
 * Class TasksModelFactory
 * @package App\Factories
 * @return TasksModel
 */
class TasksModelFactory {
    /**
     * @param ContainerInterface $container
     * @return TasksModel
     */
    public function __invoke(ContainerInterface $container): TasksModel
    {
        $db = $container->get('db');
        return new TasksModel($db);
    }
}