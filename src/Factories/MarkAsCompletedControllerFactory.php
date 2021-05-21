<?php
namespace App\Factories;
use App\Controllers\MarkAsCompletedController;
use Psr\Container\ContainerInterface;
/**
 * Class MarkAsCompletedControllerFactory
 * @package App\Factories
 * @return MarkAsCompletedController
 */
class MarkAsCompletedControllerFactory {
    public function __invoke(ContainerInterface $container): MarkAsCompletedController
    {
        $model = $container->get('TasksModel');
        return new MarkAsCompletedController($model);
    }
}