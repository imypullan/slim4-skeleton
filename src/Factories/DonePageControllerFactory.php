<?php
namespace App\Factories;
use App\Controllers\DonePageController;
use Psr\Container\ContainerInterface;
class DonePageControllerFactory {
    public function __invoke(ContainerInterface $container): DonePageController
    {
        $model = $container->get('TasksModel');
        $view = $container->get('renderer');
        return new DonePageController($model, $view);
    }
}